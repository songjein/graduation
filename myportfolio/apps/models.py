# -*- encoding: utf-8 -*-
"""
models.py

"""
from apps import db


class Project(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    
    title = db.Column(db.String(255))
    description = db.Column(db.String(255))

    # group_id = db.Column(db.Integer, db.ForeignKey('group.id'))
    
    like_count = db.Column(db.Integer, default=0)

    date_created = db.Column(db.DateTime(), default=db.func.now())


class Group(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    title = db.Column(db.String(255))

    project_id = db.Column(db.Integer, db.ForeignKey('project.id'))
    project = db.relationship('Project', 
        backref=db.backref('groups', cascade='all, delete-orphan', lazy='dynamic'))


class Log(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    # 프로젝트 id 인풋 받으면 get으로 객체 얻어와서 여기에 넣어줘.
    project_id = db.Column(db.Integer, db.ForeignKey('project.id'))
    project = db.relationship('Project', 
        backref=db.backref('logs', cascade='all, delete-orphan', lazy='dynamic'))

    title = db.Column(db.String(255))
    content = db.Column(db.Text())

    # 유저 아이디 입력 받은걸로 get해서 객체를 user 에 저장
    user_id = db.Column(db.Integer, db.ForeignKey('user.id'))
    user = db.relationship('User', 
        backref=db.backref('logs', cascade='all, delete-orphan', lazy='dynamic'))

    # 이건 안쓸거야. 댓글이 좋아요인지로 .. 판단해야해 
    like_count = db.Column(db.Integer, default=0)
    date_created = db.Column(db.DateTime(), default=db.func.now())


class Comment(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    log_id = db.Column(db.Integer, db.ForeignKey('log.id'))
    log = db.relationship('Log',
        backref=db.backref('comments', cascade='all, delete-orphan', lazy='dynamic'))

    # 유저 아이디 입력 받은걸로 get해서 객체를 user 에 저장
    user_id = db.Column(db.Integer, db.ForeignKey('user.id'))
    user = db.relationship('User', 
        backref=db.backref('comments', cascade='all, delete-orphan', lazy='dynamic'))

    content = db.Column(db.Text())

    # 댓글 자체에 좋아요 카운트 수
    like_count = db.Column(db.Integer, default=0)

    # 이 댓글이 추천 댓글인지 , 그냥 의견 댓글인지
    is_like = db.Column(db.Boolean, default=False)

    date_created = db.Column(db.DateTime(), default=db.func.now())


class User(db.Model):
    id = db.Column(db.String(255), primary_key=True)
    password = db.Column(db.String(255))
    name = db.Column(db.String(255))
    join_date = db.Column(db.DateTime(), default=db.func.now())


