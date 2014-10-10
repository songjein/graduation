# -*- coding: utf-8 -*-
from flask import render_template, request, redirect, url_for, flash
from sqlalchemy import desc
from apps import app, db

import pusher

import google.appengine.ext as google 

class Photo(google.db.Model):
    photo = google.db.BlobProperty()

from apps.models import (User, Comment, Log, Group, Project)

#
# @index & article list
#


@app.route('/', methods=['GET', 'POST'])
def article_list():

    return redirect(url_for('login'))

@app.route('/login')
def login():
    return render_template('login/login.html')


@app.route('/test', methods=['GET', 'POST'])
def test():

    group_list = []
    user_list = []

    if request.method == 'POST':
        if request.form['hidden_val'] == 'test1':
            user_id = request.form['user_id']

            user = User.query.get(user_id)

            users_comments = user.comments

            # return users_comments[0].content

            for comment in users_comments:
                group_list.append(comment.log.project.groups[0].title)
                group_list.append(comment.log.project.groups[1].title)
                group_list.append(comment.log.project.groups[2].title)

            group_list = set(group_list)

        elif request.form['hidden_val'] == 'test2':
            project_id = request.form['project_id']

            project = Project.query.get(project_id)

            for log in project.logs:
                for comment in log.comments:
                    if comment.user_id not in user_list:
                        user_list.append(comment.user_id)


    users = User.query.all()
    projects = Project.query.all()

    return render_template('home.html', users = users, group_list=group_list, projects=projects, user_list=user_list)

@app.route('/portfolio', methods=['GET'])
def portfolio():
    
    logs = Log.query.order_by(Log.date_created)

    return render_template('portfolio/portfolio.html', active_tab="portfolio", logs=logs)


@app.route('/meeting', methods=['GET'])
def meeting():
    return render_template('meeting/meeting.html', active_tab="meeting")


@app.route('/send', methods=['GET'])
def sendmsg():

    p = pusher.Pusher(
      app_id='85292',
      key='2f1737dadfe8bacfb3a1',
      secret='f155f7d0a772622f9a67'
    )

    chat_name = request.args.get('name_data')
    chat_msg = request.args.get('msg_data')


    p['test_channel'].trigger('event_msg', {'name': chat_name, 'msg': chat_msg})

    return ""


@app.route('/join', methods=['GET', 'POST'])
def join():

    if request.method == 'POST':
        user_id = request.form['user_id']
        pw = request.form['pw']
        name = request.form['name']

        user = User(
                id = user_id,
                password = pw,
                name = name,
            )

        db.session.add(user)
        db.session.commit()

        flash('submit success','success')

    users = User.query.all()

    return render_template('join/join.html', users = users)


@app.route('/create_project', methods=['GET', 'POST'])
def create_project():
    if request.method == 'POST':
        project_name = request.form['project_name']
        project_desc = request.form['project_desc']

        g1 = request.form['group1']
        c1 = request.form['category1']

        g2 = request.form['group2']
        c2 = request.form['category2']

        g3 = request.form['group3']
        c3 = request.form['category3']

        proj = Project(
                title = project_name,
                description = project_desc,
            )

        g1 = Group(
                project = proj,
                title = c1,
            )
        g2 = Group(
                project = proj,
                title = c2,
            )

        g3 = Group(
                project = proj,
                title = c3,
            )


        db.session.add(proj)
        db.session.add(g1)
        db.session.add(g2)
        db.session.add(g3)
        db.session.commit()

        flash('submit success','success')

    projects = Project.query.all()
       
    return render_template('create_project/create_project.html', projects = projects)
    
@app.route('/make_log', methods=['GET', 'POST'])
def make_log():
    projects = Project.query.all()
    users = User.query.all()

    #원래는 프로젝트에 속한 사람을 뿌려줘야돼.

    if request.method == 'POST':
        project_id = request.form['project']
        user_id = request.form['user']
        title = request.form['title']
        content = request.form['content']

        # file 저장

        file_key = None
        if request.files['photo']:
            post_data = request.files['photo']
            filestream = post_data.read()
            upload_data = Photo()
            upload_data.photo = google.db.Blob(filestream)
            upload_data.put()
            file_key = str(upload_data.key())
            

        project = Project.query.get(project_id)
        user = User.query.get(user_id)

        # 확신해도 되는건 project, user 제대로 들어감.

        log = Log(
                project = project,
                project_id = project_id,
                user = user,
                user_id = user_id,
                title = title,
                content = content,
                file_key = file_key
            )

        db.session.add(log)
        db.session.commit()

        flash('submit success','success')

    logs = Log.query.all()
    return render_template('make_log/make_log.html', projects = projects, users = users, logs = logs)

@app.route('/show/<key>')
def shows(key):
    upload_data = google.db.get(key)
    return app.response_class(upload_data.photo)


@app.route('/make_comment', methods=['GET', 'POST'])
def make_comment():
     # projects = Project.query.all()
    users = User.query.all()
    logs = Log.query.all()

    if request.method == 'POST':
        log_id = request.form['log_id']
        user_id = request.form['user_id']
        is_like = False
        if request.form['islike'] == 'like_with_feed':
            is_like = True
        content = request.form['content']


        log = Log.query.get(log_id)
        user = User.query.get(user_id)

        comment = Comment(
                log = log,
                user = user,
                is_like = is_like,
                content = content,
            )
        db.session.add(comment)
        db.session.commit()

        flash('submit success','success')
        
    comments = Comment.query.all()

    return render_template('make_comment/make_comment.html', users=users, logs=logs, comments=comments)


# #
# # @password check
# #
# @app.route('/pwcheck/<path:type>/target/<int:id>/', methods=['GET', 'POST'])
# def password_check(type, id):
# if request.method == 'GET':
# return render_template('pwcheck.html')
#     elif request.method == 'POST':
#         if type == 'COMMENT_UPDATE':
#             return redirect(url_for('comment_update', id=id))
#         elif type == 'COMMENT_DELETE':
#             return redirect(url_for('comment_delete', id=id))


#
# @error Handlers
#
# Handle 404 errors
@app.errorhandler(404)
def page_not_found(e):
    return render_template('error/404.html'), 404


# Handle 500 errors
@app.errorhandler(500)
def server_error(e):
    return render_template('error/500.html'), 500