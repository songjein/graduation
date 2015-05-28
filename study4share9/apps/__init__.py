# -*- coding: utf-8 -*-
"""
Initialize Flask app

"""
import os
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

# error logging
##############################################################################################################
ERROR_LOG_DIR = './log/'
app.config['ERROR_LOG_DIR'] = ERROR_LOG_DIR

if not app.debug:
        import logging
        file_handler = logging.FileHandler(os.path.join(app.root_path, app.config['ERROR_LOG_DIR'], "log.txt"))
        #file_handler = logging.handlers.TimedRotatingFileHandler(os.path.join(app.root_path, app.config['ERROR_LOG_DIR'], "log.txt"))
        file_handler.setLevel(logging.ERROR)
        app.logger.addHandler(file_handler)
##############################################################################################################


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
        'scope': [ 'public_profile', 'publish_actions', 'user_friends'  ]
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


