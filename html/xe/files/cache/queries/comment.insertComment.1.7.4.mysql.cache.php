<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComment");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl10_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl10_argument'}->checkNotNull();
if(!${'comment_srl10_argument'}->isValid()) return ${'comment_srl10_argument'}->getErrorMessage();
if(${'comment_srl10_argument'} !== null) ${'comment_srl10_argument'}->setColumnType('number');

${'module_srl11_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl11_argument'}->checkFilter('number');
${'module_srl11_argument'}->checkNotNull();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

${'parent_srl12_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl12_argument'}->checkFilter('number');
${'parent_srl12_argument'}->ensureDefaultValue('0');
if(!${'parent_srl12_argument'}->isValid()) return ${'parent_srl12_argument'}->getErrorMessage();
if(${'parent_srl12_argument'} !== null) ${'parent_srl12_argument'}->setColumnType('number');

${'document_srl13_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl13_argument'}->checkFilter('number');
${'document_srl13_argument'}->checkNotNull();
if(!${'document_srl13_argument'}->isValid()) return ${'document_srl13_argument'}->getErrorMessage();
if(${'document_srl13_argument'} !== null) ${'document_srl13_argument'}->setColumnType('number');

${'is_secret14_argument'} = new Argument('is_secret', $args->{'is_secret'});
${'is_secret14_argument'}->ensureDefaultValue('N');
if(!${'is_secret14_argument'}->isValid()) return ${'is_secret14_argument'}->getErrorMessage();
if(${'is_secret14_argument'} !== null) ${'is_secret14_argument'}->setColumnType('char');

${'notify_message15_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message15_argument'}->ensureDefaultValue('N');
if(!${'notify_message15_argument'}->isValid()) return ${'notify_message15_argument'}->getErrorMessage();
if(${'notify_message15_argument'} !== null) ${'notify_message15_argument'}->setColumnType('char');

${'content16_argument'} = new Argument('content', $args->{'content'});
${'content16_argument'}->checkNotNull();
if(!${'content16_argument'}->isValid()) return ${'content16_argument'}->getErrorMessage();
if(${'content16_argument'} !== null) ${'content16_argument'}->setColumnType('bigtext');

${'voted_count17_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count17_argument'}->ensureDefaultValue('0');
if(!${'voted_count17_argument'}->isValid()) return ${'voted_count17_argument'}->getErrorMessage();
if(${'voted_count17_argument'} !== null) ${'voted_count17_argument'}->setColumnType('number');

${'blamed_count18_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count18_argument'}->ensureDefaultValue('0');
if(!${'blamed_count18_argument'}->isValid()) return ${'blamed_count18_argument'}->getErrorMessage();
if(${'blamed_count18_argument'} !== null) ${'blamed_count18_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password19_argument'} = new Argument('password', $args->{'password'});
if(!${'password19_argument'}->isValid()) return ${'password19_argument'}->getErrorMessage();
} else
${'password19_argument'} = NULL;if(${'password19_argument'} !== null) ${'password19_argument'}->setColumnType('varchar');

${'nick_name20_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name20_argument'}->checkNotNull();
if(!${'nick_name20_argument'}->isValid()) return ${'nick_name20_argument'}->getErrorMessage();
if(${'nick_name20_argument'} !== null) ${'nick_name20_argument'}->setColumnType('varchar');

${'user_id21_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id21_argument'}->ensureDefaultValue('');
if(!${'user_id21_argument'}->isValid()) return ${'user_id21_argument'}->getErrorMessage();
if(${'user_id21_argument'} !== null) ${'user_id21_argument'}->setColumnType('varchar');

${'user_name22_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name22_argument'}->ensureDefaultValue('');
if(!${'user_name22_argument'}->isValid()) return ${'user_name22_argument'}->getErrorMessage();
if(${'user_name22_argument'} !== null) ${'user_name22_argument'}->setColumnType('varchar');

${'member_srl23_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl23_argument'}->checkFilter('number');
${'member_srl23_argument'}->ensureDefaultValue('0');
if(!${'member_srl23_argument'}->isValid()) return ${'member_srl23_argument'}->getErrorMessage();
if(${'member_srl23_argument'} !== null) ${'member_srl23_argument'}->setColumnType('number');

${'email_address24_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address24_argument'}->checkFilter('email');
${'email_address24_argument'}->ensureDefaultValue('');
if(!${'email_address24_argument'}->isValid()) return ${'email_address24_argument'}->getErrorMessage();
if(${'email_address24_argument'} !== null) ${'email_address24_argument'}->setColumnType('varchar');

${'homepage25_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage25_argument'}->checkFilter('homepage');
${'homepage25_argument'}->ensureDefaultValue('');
if(!${'homepage25_argument'}->isValid()) return ${'homepage25_argument'}->getErrorMessage();
if(${'homepage25_argument'} !== null) ${'homepage25_argument'}->setColumnType('varchar');

${'uploaded_count26_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count26_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count26_argument'}->isValid()) return ${'uploaded_count26_argument'}->getErrorMessage();
if(${'uploaded_count26_argument'} !== null) ${'uploaded_count26_argument'}->setColumnType('number');

${'regdate27_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate27_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate27_argument'}->isValid()) return ${'regdate27_argument'}->getErrorMessage();
if(${'regdate27_argument'} !== null) ${'regdate27_argument'}->setColumnType('date');

${'last_update28_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update28_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update28_argument'}->isValid()) return ${'last_update28_argument'}->getErrorMessage();
if(${'last_update28_argument'} !== null) ${'last_update28_argument'}->setColumnType('date');

${'ipaddress29_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress29_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress29_argument'}->isValid()) return ${'ipaddress29_argument'}->getErrorMessage();
if(${'ipaddress29_argument'} !== null) ${'ipaddress29_argument'}->setColumnType('varchar');

${'list_order30_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order30_argument'}->ensureDefaultValue('0');
if(!${'list_order30_argument'}->isValid()) return ${'list_order30_argument'}->getErrorMessage();
if(${'list_order30_argument'} !== null) ${'list_order30_argument'}->setColumnType('number');

${'status31_argument'} = new Argument('status', $args->{'status'});
${'status31_argument'}->checkFilter('number');
${'status31_argument'}->checkNotNull();
if(!${'status31_argument'}->isValid()) return ${'status31_argument'}->getErrorMessage();
if(${'status31_argument'} !== null) ${'status31_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl10_argument'})
,new InsertExpression('`module_srl`', ${'module_srl11_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl12_argument'})
,new InsertExpression('`document_srl`', ${'document_srl13_argument'})
,new InsertExpression('`is_secret`', ${'is_secret14_argument'})
,new InsertExpression('`notify_message`', ${'notify_message15_argument'})
,new InsertExpression('`content`', ${'content16_argument'})
,new InsertExpression('`voted_count`', ${'voted_count17_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count18_argument'})
,new InsertExpression('`password`', ${'password19_argument'})
,new InsertExpression('`nick_name`', ${'nick_name20_argument'})
,new InsertExpression('`user_id`', ${'user_id21_argument'})
,new InsertExpression('`user_name`', ${'user_name22_argument'})
,new InsertExpression('`member_srl`', ${'member_srl23_argument'})
,new InsertExpression('`email_address`', ${'email_address24_argument'})
,new InsertExpression('`homepage`', ${'homepage25_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count26_argument'})
,new InsertExpression('`regdate`', ${'regdate27_argument'})
,new InsertExpression('`last_update`', ${'last_update28_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress29_argument'})
,new InsertExpression('`list_order`', ${'list_order30_argument'})
,new InsertExpression('`status`', ${'status31_argument'})
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>