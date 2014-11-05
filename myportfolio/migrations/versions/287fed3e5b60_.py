"""empty message

Revision ID: 287fed3e5b60
Revises: 29ccb17f4b2e
Create Date: 2014-10-02 10:55:12.466000

"""

# revision identifiers, used by Alembic.
revision = '287fed3e5b60'
down_revision = '29ccb17f4b2e'

from alembic import op
import sqlalchemy as sa
from sqlalchemy.dialects import mysql

def upgrade():
    ### commands auto generated by Alembic - please adjust! ###
    op.drop_table('log')
    ### end Alembic commands ###


def downgrade():
    ### commands auto generated by Alembic - please adjust! ###
    op.create_table('log',
    sa.Column('id', mysql.INTEGER(display_width=11), nullable=False),
    sa.Column('title', mysql.VARCHAR(length=255), nullable=True),
    sa.Column('content', mysql.TEXT(), nullable=True),
    sa.Column('like_count', mysql.INTEGER(display_width=11), autoincrement=False, nullable=True),
    sa.Column('date_created', mysql.DATETIME(), nullable=True),
    sa.Column('user_id', mysql.INTEGER(display_width=11), autoincrement=False, nullable=True),
    sa.PrimaryKeyConstraint('id'),
    mysql_default_charset=u'utf8',
    mysql_engine=u'InnoDB'
    )
    ### end Alembic commands ###