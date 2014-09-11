# -*- encoding: utf-8 -*-
"""
models.py

"""
from apps import db

class Project(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    title = db.Column(db.String(255))
    
    # category_1 = db.Column(db.String(255))
    # category_2 = db.Column(db.String(255))
    # category_3 = db.Column(db.String(255))
    
    like_count = db.Column(db.Integer, default=0)

    date_created = db.Column(db.DateTime(), default=db.func.now())


# 그러면 나머지 애들이 project_id혹은 relationship을 가지고 있어야돼.

class Article(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    project = db.relationship('Project', 
        backref=db.backref('articles', cascade='all, delete-orphan', lazy='dynamic'))

    title = db.Column(db.String(255))
    content = db.Column(db.Text())
    author = db.Column(db.String(255))
    # 태그 
    category = db.Column(db.String(255))
    
    # 이건 안쓸거야. 댓글이 좋아요인지로 .. 판단해야해 
    like_count = db.Column(db.Integer, default=0)
    date_created = db.Column(db.DateTime(), default=db.func.now())


class Comment(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    article = db.relationship('Article',
        backref=db.backref('comments', cascade='all, delete-orphan', lazy='dynamic'))

    # 작가를 실제 회원으로 바꿔야되. relationship으로 하면 될듯.
    author = db.Column(db.String(255))
    email = db.Column(db.String(255))
    password = db.Column(db.String(255))

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


