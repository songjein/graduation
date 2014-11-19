"""
settings.py

Configuration for Flask app

"""

from datetime import timedelta

class Config:
    # Set secret key to use session
    SECRET_KEY = "likelion-flaskr-secret-key"
    debug = False
    PERMANENT_SESSION_LIFETIME = timedelta(minutes=10)


class Production(Config):
    debug = True
    CSRF_ENABLED = False
    ADMIN = "jeinsong200@gmail.com"
    SQLALCHEMY_DATABASE_URI = 'mysql+gaerdbms:///portfolio?instance=do-portfolio:jein-song2'
    migration_directory = 'migrations'

    FACEBOOK_APP_ID = "334363720083600"
    FACEBOOK_APP_SECRET = "2579c4ee11871e6618a51a4ff2a44a50"