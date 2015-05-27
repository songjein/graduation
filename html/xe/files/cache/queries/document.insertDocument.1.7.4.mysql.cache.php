<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl206_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl206_argument'}->checkFilter('number');
${'document_srl206_argument'}->checkNotNull();
if(!${'document_srl206_argument'}->isValid()) return ${'document_srl206_argument'}->getErrorMessage();
if(${'document_srl206_argument'} !== null) ${'document_srl206_argument'}->setColumnType('number');

${'module_srl207_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl207_argument'}->checkFilter('number');
${'module_srl207_argument'}->ensureDefaultValue('0');
if(!${'module_srl207_argument'}->isValid()) return ${'module_srl207_argument'}->getErrorMessage();
if(${'module_srl207_argument'} !== null) ${'module_srl207_argument'}->setColumnType('number');

${'category_srl208_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl208_argument'}->checkFilter('number');
${'category_srl208_argument'}->ensureDefaultValue('0');
if(!${'category_srl208_argument'}->isValid()) return ${'category_srl208_argument'}->getErrorMessage();
if(${'category_srl208_argument'} !== null) ${'category_srl208_argument'}->setColumnType('number');

${'lang_code209_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code209_argument'}->ensureDefaultValue('');
if(!${'lang_code209_argument'}->isValid()) return ${'lang_code209_argument'}->getErrorMessage();
if(${'lang_code209_argument'} !== null) ${'lang_code209_argument'}->setColumnType('varchar');

${'is_notice210_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice210_argument'}->ensureDefaultValue('N');
${'is_notice210_argument'}->checkNotNull();
if(!${'is_notice210_argument'}->isValid()) return ${'is_notice210_argument'}->getErrorMessage();
if(${'is_notice210_argument'} !== null) ${'is_notice210_argument'}->setColumnType('char');

${'title211_argument'} = new Argument('title', $args->{'title'});
${'title211_argument'}->checkNotNull();
if(!${'title211_argument'}->isValid()) return ${'title211_argument'}->getErrorMessage();
if(${'title211_argument'} !== null) ${'title211_argument'}->setColumnType('varchar');

${'title_bold212_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold212_argument'}->ensureDefaultValue('N');
if(!${'title_bold212_argument'}->isValid()) return ${'title_bold212_argument'}->getErrorMessage();
if(${'title_bold212_argument'} !== null) ${'title_bold212_argument'}->setColumnType('char');

${'title_color213_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color213_argument'}->ensureDefaultValue('N');
if(!${'title_color213_argument'}->isValid()) return ${'title_color213_argument'}->getErrorMessage();
if(${'title_color213_argument'} !== null) ${'title_color213_argument'}->setColumnType('varchar');

${'content214_argument'} = new Argument('content', $args->{'content'});
${'content214_argument'}->checkNotNull();
if(!${'content214_argument'}->isValid()) return ${'content214_argument'}->getErrorMessage();
if(${'content214_argument'} !== null) ${'content214_argument'}->setColumnType('bigtext');

${'readed_count215_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count215_argument'}->ensureDefaultValue('0');
if(!${'readed_count215_argument'}->isValid()) return ${'readed_count215_argument'}->getErrorMessage();
if(${'readed_count215_argument'} !== null) ${'readed_count215_argument'}->setColumnType('number');

${'blamed_count216_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count216_argument'}->ensureDefaultValue('0');
if(!${'blamed_count216_argument'}->isValid()) return ${'blamed_count216_argument'}->getErrorMessage();
if(${'blamed_count216_argument'} !== null) ${'blamed_count216_argument'}->setColumnType('number');

${'voted_count217_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count217_argument'}->ensureDefaultValue('0');
if(!${'voted_count217_argument'}->isValid()) return ${'voted_count217_argument'}->getErrorMessage();
if(${'voted_count217_argument'} !== null) ${'voted_count217_argument'}->setColumnType('number');

${'comment_count218_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count218_argument'}->ensureDefaultValue('0');
if(!${'comment_count218_argument'}->isValid()) return ${'comment_count218_argument'}->getErrorMessage();
if(${'comment_count218_argument'} !== null) ${'comment_count218_argument'}->setColumnType('number');

${'trackback_count219_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count219_argument'}->ensureDefaultValue('0');
if(!${'trackback_count219_argument'}->isValid()) return ${'trackback_count219_argument'}->getErrorMessage();
if(${'trackback_count219_argument'} !== null) ${'trackback_count219_argument'}->setColumnType('number');

${'uploaded_count220_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count220_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count220_argument'}->isValid()) return ${'uploaded_count220_argument'}->getErrorMessage();
if(${'uploaded_count220_argument'} !== null) ${'uploaded_count220_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password221_argument'} = new Argument('password', $args->{'password'});
if(!${'password221_argument'}->isValid()) return ${'password221_argument'}->getErrorMessage();
} else
${'password221_argument'} = NULL;if(${'password221_argument'} !== null) ${'password221_argument'}->setColumnType('varchar');

${'nick_name222_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name222_argument'}->checkNotNull();
if(!${'nick_name222_argument'}->isValid()) return ${'nick_name222_argument'}->getErrorMessage();
if(${'nick_name222_argument'} !== null) ${'nick_name222_argument'}->setColumnType('varchar');

${'member_srl223_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl223_argument'}->checkFilter('number');
${'member_srl223_argument'}->ensureDefaultValue('0');
if(!${'member_srl223_argument'}->isValid()) return ${'member_srl223_argument'}->getErrorMessage();
if(${'member_srl223_argument'} !== null) ${'member_srl223_argument'}->setColumnType('number');

${'user_id224_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id224_argument'}->ensureDefaultValue('');
if(!${'user_id224_argument'}->isValid()) return ${'user_id224_argument'}->getErrorMessage();
if(${'user_id224_argument'} !== null) ${'user_id224_argument'}->setColumnType('varchar');

${'user_name225_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name225_argument'}->ensureDefaultValue('');
if(!${'user_name225_argument'}->isValid()) return ${'user_name225_argument'}->getErrorMessage();
if(${'user_name225_argument'} !== null) ${'user_name225_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address226_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address226_argument'}->checkFilter('email');
if(!${'email_address226_argument'}->isValid()) return ${'email_address226_argument'}->getErrorMessage();
} else
${'email_address226_argument'} = NULL;if(${'email_address226_argument'} !== null) ${'email_address226_argument'}->setColumnType('varchar');

${'homepage227_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage227_argument'}->checkFilter('homepage');
${'homepage227_argument'}->ensureDefaultValue('');
if(!${'homepage227_argument'}->isValid()) return ${'homepage227_argument'}->getErrorMessage();
if(${'homepage227_argument'} !== null) ${'homepage227_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags228_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags228_argument'}->isValid()) return ${'tags228_argument'}->getErrorMessage();
} else
${'tags228_argument'} = NULL;if(${'tags228_argument'} !== null) ${'tags228_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars229_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars229_argument'}->isValid()) return ${'extra_vars229_argument'}->getErrorMessage();
} else
${'extra_vars229_argument'} = NULL;if(${'extra_vars229_argument'} !== null) ${'extra_vars229_argument'}->setColumnType('text');

${'regdate230_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate230_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate230_argument'}->isValid()) return ${'regdate230_argument'}->getErrorMessage();
if(${'regdate230_argument'} !== null) ${'regdate230_argument'}->setColumnType('date');

${'last_update231_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update231_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update231_argument'}->isValid()) return ${'last_update231_argument'}->getErrorMessage();
if(${'last_update231_argument'} !== null) ${'last_update231_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater232_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater232_argument'}->isValid()) return ${'last_updater232_argument'}->getErrorMessage();
} else
${'last_updater232_argument'} = NULL;if(${'last_updater232_argument'} !== null) ${'last_updater232_argument'}->setColumnType('varchar');

${'ipaddress233_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress233_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress233_argument'}->isValid()) return ${'ipaddress233_argument'}->getErrorMessage();
if(${'ipaddress233_argument'} !== null) ${'ipaddress233_argument'}->setColumnType('varchar');

${'list_order234_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order234_argument'}->ensureDefaultValue('0');
if(!${'list_order234_argument'}->isValid()) return ${'list_order234_argument'}->getErrorMessage();
if(${'list_order234_argument'} !== null) ${'list_order234_argument'}->setColumnType('number');

${'update_order235_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order235_argument'}->ensureDefaultValue('0');
if(!${'update_order235_argument'}->isValid()) return ${'update_order235_argument'}->getErrorMessage();
if(${'update_order235_argument'} !== null) ${'update_order235_argument'}->setColumnType('number');

${'allow_trackback236_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback236_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback236_argument'}->isValid()) return ${'allow_trackback236_argument'}->getErrorMessage();
if(${'allow_trackback236_argument'} !== null) ${'allow_trackback236_argument'}->setColumnType('char');

${'notify_message237_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message237_argument'}->ensureDefaultValue('N');
if(!${'notify_message237_argument'}->isValid()) return ${'notify_message237_argument'}->getErrorMessage();
if(${'notify_message237_argument'} !== null) ${'notify_message237_argument'}->setColumnType('char');

${'status238_argument'} = new Argument('status', $args->{'status'});
${'status238_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status238_argument'}->isValid()) return ${'status238_argument'}->getErrorMessage();
if(${'status238_argument'} !== null) ${'status238_argument'}->setColumnType('varchar');

${'commentStatus239_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus239_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus239_argument'}->isValid()) return ${'commentStatus239_argument'}->getErrorMessage();
if(${'commentStatus239_argument'} !== null) ${'commentStatus239_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl206_argument'})
,new InsertExpression('`module_srl`', ${'module_srl207_argument'})
,new InsertExpression('`category_srl`', ${'category_srl208_argument'})
,new InsertExpression('`lang_code`', ${'lang_code209_argument'})
,new InsertExpression('`is_notice`', ${'is_notice210_argument'})
,new InsertExpression('`title`', ${'title211_argument'})
,new InsertExpression('`title_bold`', ${'title_bold212_argument'})
,new InsertExpression('`title_color`', ${'title_color213_argument'})
,new InsertExpression('`content`', ${'content214_argument'})
,new InsertExpression('`readed_count`', ${'readed_count215_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count216_argument'})
,new InsertExpression('`voted_count`', ${'voted_count217_argument'})
,new InsertExpression('`comment_count`', ${'comment_count218_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count219_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count220_argument'})
,new InsertExpression('`password`', ${'password221_argument'})
,new InsertExpression('`nick_name`', ${'nick_name222_argument'})
,new InsertExpression('`member_srl`', ${'member_srl223_argument'})
,new InsertExpression('`user_id`', ${'user_id224_argument'})
,new InsertExpression('`user_name`', ${'user_name225_argument'})
,new InsertExpression('`email_address`', ${'email_address226_argument'})
,new InsertExpression('`homepage`', ${'homepage227_argument'})
,new InsertExpression('`tags`', ${'tags228_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars229_argument'})
,new InsertExpression('`regdate`', ${'regdate230_argument'})
,new InsertExpression('`last_update`', ${'last_update231_argument'})
,new InsertExpression('`last_updater`', ${'last_updater232_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress233_argument'})
,new InsertExpression('`list_order`', ${'list_order234_argument'})
,new InsertExpression('`update_order`', ${'update_order235_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback236_argument'})
,new InsertExpression('`notify_message`', ${'notify_message237_argument'})
,new InsertExpression('`status`', ${'status238_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus239_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>