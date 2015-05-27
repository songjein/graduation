<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl66_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl66_argument'}->checkFilter('number');
${'member_srl66_argument'}->checkNotNull();
if(!${'member_srl66_argument'}->isValid()) return ${'member_srl66_argument'}->getErrorMessage();
if(${'member_srl66_argument'} !== null) ${'member_srl66_argument'}->setColumnType('number');

${'user_id67_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id67_argument'}->checkFilter('userid');
${'user_id67_argument'}->checkNotNull();
if(!${'user_id67_argument'}->isValid()) return ${'user_id67_argument'}->getErrorMessage();
if(${'user_id67_argument'} !== null) ${'user_id67_argument'}->setColumnType('varchar');

${'email_address68_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address68_argument'}->checkFilter('email');
${'email_address68_argument'}->checkNotNull();
if(!${'email_address68_argument'}->isValid()) return ${'email_address68_argument'}->getErrorMessage();
if(${'email_address68_argument'} !== null) ${'email_address68_argument'}->setColumnType('varchar');

${'password69_argument'} = new Argument('password', $args->{'password'});
${'password69_argument'}->checkNotNull();
if(!${'password69_argument'}->isValid()) return ${'password69_argument'}->getErrorMessage();
if(${'password69_argument'} !== null) ${'password69_argument'}->setColumnType('varchar');

${'email_id70_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id70_argument'}->checkNotNull();
if(!${'email_id70_argument'}->isValid()) return ${'email_id70_argument'}->getErrorMessage();
if(${'email_id70_argument'} !== null) ${'email_id70_argument'}->setColumnType('varchar');

${'email_host71_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host71_argument'}->checkNotNull();
if(!${'email_host71_argument'}->isValid()) return ${'email_host71_argument'}->getErrorMessage();
if(${'email_host71_argument'} !== null) ${'email_host71_argument'}->setColumnType('varchar');

${'user_name72_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name72_argument'}->checkNotNull();
if(!${'user_name72_argument'}->isValid()) return ${'user_name72_argument'}->getErrorMessage();
if(${'user_name72_argument'} !== null) ${'user_name72_argument'}->setColumnType('varchar');

${'nick_name73_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name73_argument'}->checkNotNull();
if(!${'nick_name73_argument'}->isValid()) return ${'nick_name73_argument'}->getErrorMessage();
if(${'nick_name73_argument'} !== null) ${'nick_name73_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question74_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question74_argument'}->isValid()) return ${'find_account_question74_argument'}->getErrorMessage();
} else
${'find_account_question74_argument'} = NULL;if(${'find_account_question74_argument'} !== null) ${'find_account_question74_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer75_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer75_argument'}->isValid()) return ${'find_account_answer75_argument'}->getErrorMessage();
} else
${'find_account_answer75_argument'} = NULL;if(${'find_account_answer75_argument'} !== null) ${'find_account_answer75_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage76_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage76_argument'}->isValid()) return ${'homepage76_argument'}->getErrorMessage();
} else
${'homepage76_argument'} = NULL;if(${'homepage76_argument'} !== null) ${'homepage76_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog77_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog77_argument'}->isValid()) return ${'blog77_argument'}->getErrorMessage();
} else
${'blog77_argument'} = NULL;if(${'blog77_argument'} !== null) ${'blog77_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday78_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday78_argument'}->isValid()) return ${'birthday78_argument'}->getErrorMessage();
} else
${'birthday78_argument'} = NULL;if(${'birthday78_argument'} !== null) ${'birthday78_argument'}->setColumnType('char');

${'allow_mailing79_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing79_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing79_argument'}->isValid()) return ${'allow_mailing79_argument'}->getErrorMessage();
if(${'allow_mailing79_argument'} !== null) ${'allow_mailing79_argument'}->setColumnType('char');

${'allow_message80_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message80_argument'}->ensureDefaultValue('Y');
if(!${'allow_message80_argument'}->isValid()) return ${'allow_message80_argument'}->getErrorMessage();
if(${'allow_message80_argument'} !== null) ${'allow_message80_argument'}->setColumnType('char');

${'denied81_argument'} = new Argument('denied', $args->{'denied'});
${'denied81_argument'}->ensureDefaultValue('N');
if(!${'denied81_argument'}->isValid()) return ${'denied81_argument'}->getErrorMessage();
if(${'denied81_argument'} !== null) ${'denied81_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date82_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date82_argument'}->isValid()) return ${'limit_date82_argument'}->getErrorMessage();
} else
${'limit_date82_argument'} = NULL;if(${'limit_date82_argument'} !== null) ${'limit_date82_argument'}->setColumnType('date');

${'regdate83_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate83_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate83_argument'}->isValid()) return ${'regdate83_argument'}->getErrorMessage();
if(${'regdate83_argument'} !== null) ${'regdate83_argument'}->setColumnType('date');

${'change_password_date84_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date84_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date84_argument'}->isValid()) return ${'change_password_date84_argument'}->getErrorMessage();
if(${'change_password_date84_argument'} !== null) ${'change_password_date84_argument'}->setColumnType('date');

${'last_login85_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login85_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login85_argument'}->isValid()) return ${'last_login85_argument'}->getErrorMessage();
if(${'last_login85_argument'} !== null) ${'last_login85_argument'}->setColumnType('date');

${'is_admin86_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin86_argument'}->ensureDefaultValue('N');
if(!${'is_admin86_argument'}->isValid()) return ${'is_admin86_argument'}->getErrorMessage();
if(${'is_admin86_argument'} !== null) ${'is_admin86_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description87_argument'} = new Argument('description', $args->{'description'});
if(!${'description87_argument'}->isValid()) return ${'description87_argument'}->getErrorMessage();
} else
${'description87_argument'} = NULL;if(${'description87_argument'} !== null) ${'description87_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars88_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars88_argument'}->isValid()) return ${'extra_vars88_argument'}->getErrorMessage();
} else
${'extra_vars88_argument'} = NULL;if(${'extra_vars88_argument'} !== null) ${'extra_vars88_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order89_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order89_argument'}->isValid()) return ${'list_order89_argument'}->getErrorMessage();
} else
${'list_order89_argument'} = NULL;if(${'list_order89_argument'} !== null) ${'list_order89_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl66_argument'})
,new InsertExpression('`user_id`', ${'user_id67_argument'})
,new InsertExpression('`email_address`', ${'email_address68_argument'})
,new InsertExpression('`password`', ${'password69_argument'})
,new InsertExpression('`email_id`', ${'email_id70_argument'})
,new InsertExpression('`email_host`', ${'email_host71_argument'})
,new InsertExpression('`user_name`', ${'user_name72_argument'})
,new InsertExpression('`nick_name`', ${'nick_name73_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question74_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer75_argument'})
,new InsertExpression('`homepage`', ${'homepage76_argument'})
,new InsertExpression('`blog`', ${'blog77_argument'})
,new InsertExpression('`birthday`', ${'birthday78_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing79_argument'})
,new InsertExpression('`allow_message`', ${'allow_message80_argument'})
,new InsertExpression('`denied`', ${'denied81_argument'})
,new InsertExpression('`limit_date`', ${'limit_date82_argument'})
,new InsertExpression('`regdate`', ${'regdate83_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date84_argument'})
,new InsertExpression('`last_login`', ${'last_login85_argument'})
,new InsertExpression('`is_admin`', ${'is_admin86_argument'})
,new InsertExpression('`description`', ${'description87_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars88_argument'})
,new InsertExpression('`list_order`', ${'list_order89_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>