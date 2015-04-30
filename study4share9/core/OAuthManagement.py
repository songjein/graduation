# -*- coding: utf-8 -*-
from flask import session, flash, redirect, url_for
from flask.ext.login import login_user
from apps import db
from apps.models import User


def OAuth2RegisterToUser(user_data, type):
    
    user = User.query.filter_by(id=user_data.get('id')).first()


    if user is None:
        
        if type == 'FACEBOOK':
            user = User(
                id=user_data['id'],
                name=user_data['name'],
                picture="http://graph.facebook.com/%s/picture" % user_data['id'],
                gender=user_data['gender']
            )
            db.session.add(user)
            db.session.commit()
        
        #
        # @users
        #
        users = User.query.filter_by(id=user.id)

        if users.count() > 1:
            return 409

        user = users.first()
        #

    if user:
        if login_user(user):
            return 200
        else:
            return 500


def OAuthSessionPop():
    OAUTH_PROVIDER = ['oauth_token']
    for provider in OAUTH_PROVIDER:
        session.pop(provider, None)


def OAuthRegisterAndLoginRedirect(register_result):
    if register_result == 200:
        flash(u"로그인에 성공하였습니다.", "success")
        return redirect(url_for('main'))
    elif register_result == 409:
        flash(u"중복된 사용자 이메일입니다.", "warning")
        return redirect(url_for('login'))
    elif register_result == 500:
        flash(u"사용자 등록에 실패하였습니다. 다시 시도하여주시기 바랍니다.", "error")
        return redirect(url_for('login'))