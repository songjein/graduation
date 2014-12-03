# -*- coding: utf-8 -*-
"""
Initialize Flask app

"""
from flask import Flask
from flask.ext.sqlalchemy import SQLAlchemy
from flask.ext.migrate import Migrate, MigrateCommand
from flask.ext.script import Manager
from flask.ext.login import LoginManager
from flask.ext.oauthlib.client import OAuth




app = Flask('apps')
app.config.from_object('apps.settings.Production')

login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = 'login'
login_manager.login_message = u'로그인이 필요합니다.'

# open auth
oauth = OAuth(app)
#
# @OAuth Provider
#
facebook = oauth.remote_app(
    'facebook',
    consumer_key=app.config.get('FACEBOOK_APP_ID'),
    consumer_secret=app.config.get('FACEBOOK_APP_SECRET'),
    request_token_params={
        'scope': ['email', 'public_profile']
    },
    base_url='https://graph.facebook.com/',
    request_token_url=None,
    access_token_url='/oauth/access_token',
    authorize_url='https://www.facebook.com/dialog/oauth',
)


db = SQLAlchemy(app)
manager = Manager(app)
migrate = Migrate(app, db)
manager.add_command('db', MigrateCommand)

import controllers, models


