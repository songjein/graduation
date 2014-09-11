# -*- coding: utf-8 -*-
from flask import render_template, request, redirect, url_for, flash
from sqlalchemy import desc
from apps import app, db
from apps.forms import ArticleForm, CommentForm

import pusher

from apps.models import (
    Article,
    Comment
)

#
# @index & article list
#
@app.route('/', methods=['GET'])
@app.route('/<path:category>', methods=['GET'])
def article_list(category=None):
    # html 파일에 전달할 데이터 Context
    context = {}

    # Article 데이터 전부를 받아와서 최신글 순서대로 정렬하여 'article_list' 라는 key값으로 context에 저장한다.

    if category:
        article_list = Article.query.order_by(desc(Article.date_created)).filter_by(category=category)
    else:
        article_list = Article.query.order_by(desc(Article.date_created)).all()

    context['article_list'] = article_list
    context['category_list'] = set([article.category for article in Article.query.all()])

    return render_template('home.html', context=context, active_tab='timeline', active_category=category)


#
# @article controllers
#
@app.route('/article/create/', methods=['GET', 'POST'])
def article_create():
    form = ArticleForm()
    if request.method == 'POST':
        if form.validate_on_submit():
            # 사용자가 입력한 글 데이터로 Article 모델 인스턴스를 생성한다.
            article = Article(
                title=form.title.data,
                author=form.author.data,
                category=form.category.data,
                content=form.content.data
            )

            # 데이터베이스에 데이터를 저장할 준비를 한다. (게시글)
            db.session.add(article)
            # 데이터베이스에 저장하라는 명령을 한다.
            db.session.commit()

            flash(u'게시글을 작성하였습니다.', 'success')
            return redirect(url_for('article_list'))

    return render_template('article/create.html', form=form, active_tab='article_create')


@app.route('/article/detail/<int:id>', methods=['GET'])
def article_detail(id):
    article = Article.query.get(id)
    # comments = Comment.query.order_by(desc(Comment.date_created)).filter_by(article=article)

    # relationship을 활용한 query
    comments = article.comments.order_by(desc(Comment.date_created)).all()

    return render_template('article/detail.html', article=article, comments=comments)


@app.route('/article/update/<int:id>', methods=['GET', 'POST'])
def article_update(id):
    article = Article.query.get(id)
    form = ArticleForm(request.form, obj=article)
    if request.method == 'POST':
        if form.validate_on_submit():
            form.populate_obj(article)
            db.session.commit()
        return redirect(url_for('article_detail', id=id))

    return render_template('article/update.html', form=form)


@app.route('/article/delete/<int:id>', methods=['GET', 'POST'])
def article_delete(id):
    if request.method == 'GET':
        return render_template('article/delete.html', article_id=id)
    elif request.method == 'POST':
        article_id = request.form['article_id']
        article = Article.query.get(article_id)
        db.session.delete(article)
        db.session.commit()

        flash(u'게시글을 삭제하였습니다.', 'success')
        return redirect(url_for('article_list'))


@app.route('/article/like/<int:id>', methods=['GET'])
def article_like(id):
    article = Article.query.get(id)
    article.like_count += 1

    db.session.commit()

    return redirect(url_for('article_detail', id=article.id))


#
# @comment controllers
#
@app.route('/comment/create/<int:article_id>', methods=['GET', 'POST'])
def comment_create(article_id):
    form = CommentForm()
    if request.method == 'POST':
        if form.validate_on_submit():
            # comment = Comment(
            # author=form.author.data,
            # email=form.email.data,
            # content=form.content.data,
            # password=form.password.data,
            # article_id=article_id
            # )
            comment = Comment(
                author=form.author.data,
                email=form.email.data,
                content=form.content.data,
                password=form.password.data,
                article=Article.query.get(article_id)
            )

            db.session.add(comment)
            db.session.commit()

            flash(u'댓글을 작성하였습니다.', 'success')
        return redirect(url_for('article_detail', id=article_id))
    return render_template('comment/create.html', form=form)


@app.route('/comment/update/<int:id>', methods=['GET', 'POST'])
def comment_update(id):
    comment = Comment.query.get(id)
    form = CommentForm(request.form, obj=comment)
    if request.method == 'POST':
        if form.validate_on_submit():
            if form.password.data == comment.password:
                form.populate_obj(comment)
                db.session.commit()
                flash(u'댓글을 수정하였습니다.', 'success')
                return redirect(url_for('article_detail', id=comment.article.id))
            else:
                flash(u'올바른 비밀번호를 입력하시기 바랍니다.', 'danger')

    return render_template('comment/update.html', form=form)


@app.route('/comment/delete/<int:id>', methods=['GET', 'POST'])
def comment_delete(id):
    if request.method == 'POST':
        comment_id = request.form['comment_id']
        comment_password = request.form['password']
        comment = Comment.query.get(comment_id)

        if comment.password == comment_password:
            article_id = comment.article.id

            db.session.delete(comment)
            db.session.commit()
            flash(u'댓글을 삭제하였습니다.', 'success')
            return redirect(url_for('article_detail', id=article_id))
        else:
            flash(u'올바른 비밀번호를 입력하시기 바랍니다.', 'danger')

    return render_template('comment/delete.html', comment_id=id)


@app.route('/comment/like/<int:id>', methods=['GET'])
def comment_like(id):
    comment = Comment.query.get(id)
    comment.like_count += 1

    db.session.commit()

    return redirect(url_for('article_detail', id=comment.article.id))

@app.route('/schedule')
def schedule():
    return render_template('schedule/schedule.html', active_tab="schedule")


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


@app.route('/test', methods=['GET'])
def test():


    return render_template('test/test.html', active_tab="test")


@app.route('/portfolio')
def portfolio():
    return render_template('portfolio/portfolio.html')
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
    return render_template('404.html'), 404


# Handle 500 errors
@app.errorhandler(500)
def server_error(e):
    return render_template('500.html'), 500