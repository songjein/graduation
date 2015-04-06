# -*- encoding: utf-8 -*-
"""
models.py

"""
from apps import db
from datetime import datetime

class Project(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    
    title = db.Column(db.String(255))
    description = db.Column(db.String(255))

    tags_list = db.Column(db.Text(), default=None)

    # group_id = db.Column(db.Integer, db.ForeignKey('group.id'))
    
    like_count = db.Column(db.Integer, default=0)

    like_history = db.Column(db.Text(), default=None)

    date_created = db.Column(db.DateTime(), default=db.func.now())

    schedule = db.Column(db.Text(), default=None)

    file_key = db.Column(db.String(255))

    memlist = db.Column(db.Text(), default="")

    # 유저의 프로젝트 참가 요청
    invites = db.Column(db.Text())

    # 유저 아이디 입력 받은걸로 get해서 객체를 user 에 저장
    user_id = db.Column(db.String(255))
    user = db.relationship('User', 
        foreign_keys=[user_id],
        primaryjoin="Project.user_id==User.id",
        backref=db.backref('projects', cascade='all, delete-orphan', lazy='dynamic'))

    def __repr__(self):
        return '<Proj %s>' % (self.title)


class ProjectTag(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    proj_id = db.Column(db.Integer)
    # relationship
    tags = db.Column(db.Text(), default=None)

# # 구성원 판단시 Project.user_id (생성자) + Participants.user_id(구성원)
# class Member(db.Model):
#     id = db.Column(db.Integer, primary_key=True)

#     user_id = db.Column(db.String(255))
#     user = db.relationship('User',
#         foreign_keys=[user_id],
#         primaryjoin="Member.user_id==User.id",
#         backref=db.backref('members', cascade='all, delete-orphan', lazy='dynamic')) #User쪽에서 일로 넘어올 필요는 x 

#     project_id = db.Column(db.Integer)
#     project = db.relationship('Project',
#         foreign_keys=[project_id],
#         primaryjoin="Member.project_id==Project.id",
#         backref=db.backref('members', cascade='all, delete-orphan', lazy='dynamic'))


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
        foreign_keys=[project_id],
        primaryjoin="Log.project_id==Project.id",
        backref=db.backref('logs', cascade='all, delete-orphan', lazy='dynamic'))

    title = db.Column(db.String(255))
    content = db.Column(db.Text())

    # 유저 아이디 입력 받은걸로 get해서 객체를 user 에 저장
    user_id = db.Column(db.String(255))
    user = db.relationship('User', 
        foreign_keys=[user_id],
        primaryjoin="Log.user_id==User.id",
        backref=db.backref('logs', cascade='all, delete-orphan', lazy='dynamic'))

    file_key = db.Column(db.String(255))

    like_count = db.Column(db.Integer, default=0)
    date_created = db.Column(db.DateTime(), default=db.func.now())



class Comment(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    log_id = db.Column(db.Integer, db.ForeignKey('log.id'))
    log = db.relationship('Log',
        foreign_keys=[log_id],
        primaryjoin="Comment.log_id==Log.id",
        backref=db.backref('comments', cascade='all, delete-orphan', lazy='dynamic'))

    # 유저 아이디 입력 받은걸로 get해서 객체를 user 에 저장
    user_id = db.Column(db.String(255), db.ForeignKey('user.id'))
    user = db.relationship('User', 
        foreign_keys=[user_id],
        primaryjoin="Comment.user_id==User.id",
        backref=db.backref('comments', cascade='all, delete-orphan', lazy='dynamic'))

    content = db.Column(db.Text())

    # 댓글 자체에 좋아요 카운트 수
    like_count = db.Column(db.Integer, default=0)

    # 이 댓글이 추천 댓글인지 , 그냥 의견 댓글인지
    is_like = db.Column(db.Boolean, default=False)

    date_created = db.Column(db.DateTime(), default=db.func.now())



# 구성원 판단시 Project.user_id (생성자) + Participants.user_id(구성원)
# class Favorite(db.Model):
#     id = db.Column(db.Integer, primary_key=True)

#     user_id = db.Column(db.String(255))
#     user = db.relationship('User',
#         foreign_keys=[user_id],
#         primaryjoin="Favorite.user_id==User.id",
#         backref=db.backref('favorites', cascade='all, delete-orphan', lazy='dynamic')) 

#     project_id = db.Column(db.Integer)
#     project = db.relationship('Project',
#         foreign_keys=[project_id],
#         primaryjoin="Favorite.project_id==Project.id",
#         backref=db.backref('favorites', cascade='all, delete-orphan', lazy='dynamic')) #Project쪽에서 일로 넘어올 필요는 x ?

# user...
class User(db.Model):
    # id = db.Column(db.String(255), primary_key=True)

    id = db.Column(db.String(255), primary_key=True)
    name = db.Column(db.String(64))
    gender = db.Column(db.String(10))
    picture = db.Column(db.String(255))
    # email = db.Column(db.String(120), unique=True)
    date_joined = db.Column(db.DateTime, default=db.func.now())
    date_last_logged_in = db.Column(db.DateTime)
    
    # 친구 리스트
    flist = db.Column(db.Text())

    # 즐겨찾기 리스트
    favlist = db.Column(db.Text())

    # 멤버 리스트
    mprojects = db.Column(db.Text(), default="")

    # 프로젝트 관리자의 초대
    invites = db.Column(db.Text())

    def is_authenticated(self):
        return True

    def is_active(self):
        return True

    def is_anonymous(self):
        return False

    def get_id(self):
        return unicode(self.id)

    def __repr__(self):
        return '<User %r>' % (self.name)


