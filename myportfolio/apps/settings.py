"""
settings.py

Configuration for Flask app

"""


class Config:
    # Set secret key to use session
    SECRET_KEY = "likelion-flaskr-secret-key"
    debug = False


class Production(Config):
    debug = True
    CSRF_ENABLED = False
    ADMIN = "jeinsong100@gmail.com"
    SQLALCHEMY_DATABASE_URI = 'mysql+gaerdbms:///myportfolio?instance=jein-song:js-instance'
    migration_directory = 'migrations'