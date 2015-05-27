<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl155_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl155_argument'}->ensureDefaultValue('0');
${'site_srl155_argument'}->checkNotNull();
if(!${'site_srl155_argument'}->isValid()) return ${'site_srl155_argument'}->getErrorMessage();
if(${'site_srl155_argument'} !== null) ${'site_srl155_argument'}->setColumnType('number');

${'module_srl156_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl156_argument'}->checkNotNull();
if(!${'module_srl156_argument'}->isValid()) return ${'module_srl156_argument'}->getErrorMessage();
if(${'module_srl156_argument'} !== null) ${'module_srl156_argument'}->setColumnType('number');

${'module_category_srl157_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl157_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl157_argument'}->isValid()) return ${'module_category_srl157_argument'}->getErrorMessage();
if(${'module_category_srl157_argument'} !== null) ${'module_category_srl157_argument'}->setColumnType('number');

${'mid158_argument'} = new Argument('mid', $args->{'mid'});
${'mid158_argument'}->checkNotNull();
if(!${'mid158_argument'}->isValid()) return ${'mid158_argument'}->getErrorMessage();
if(${'mid158_argument'} !== null) ${'mid158_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin159_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin159_argument'}->isValid()) return ${'skin159_argument'}->getErrorMessage();
} else
${'skin159_argument'} = NULL;if(${'skin159_argument'} !== null) ${'skin159_argument'}->setColumnType('varchar');

${'is_skin_fix160_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix160_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix160_argument'}->isValid()) return ${'is_skin_fix160_argument'}->getErrorMessage();
if(${'is_skin_fix160_argument'} !== null) ${'is_skin_fix160_argument'}->setColumnType('char');

${'is_mskin_fix161_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix161_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix161_argument'}->isValid()) return ${'is_mskin_fix161_argument'}->getErrorMessage();
if(${'is_mskin_fix161_argument'} !== null) ${'is_mskin_fix161_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin162_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin162_argument'}->isValid()) return ${'mskin162_argument'}->getErrorMessage();
} else
${'mskin162_argument'} = NULL;if(${'mskin162_argument'} !== null) ${'mskin162_argument'}->setColumnType('varchar');

${'browser_title163_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title163_argument'}->checkNotNull();
if(!${'browser_title163_argument'}->isValid()) return ${'browser_title163_argument'}->getErrorMessage();
if(${'browser_title163_argument'} !== null) ${'browser_title163_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl164_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl164_argument'}->isValid()) return ${'layout_srl164_argument'}->getErrorMessage();
} else
${'layout_srl164_argument'} = NULL;if(${'layout_srl164_argument'} !== null) ${'layout_srl164_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description165_argument'} = new Argument('description', $args->{'description'});
if(!${'description165_argument'}->isValid()) return ${'description165_argument'}->getErrorMessage();
} else
${'description165_argument'} = NULL;if(${'description165_argument'} !== null) ${'description165_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content166_argument'} = new Argument('content', $args->{'content'});
if(!${'content166_argument'}->isValid()) return ${'content166_argument'}->getErrorMessage();
} else
${'content166_argument'} = NULL;if(${'content166_argument'} !== null) ${'content166_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent167_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent167_argument'}->isValid()) return ${'mcontent167_argument'}->getErrorMessage();
} else
${'mcontent167_argument'} = NULL;if(${'mcontent167_argument'} !== null) ${'mcontent167_argument'}->setColumnType('bigtext');

${'module168_argument'} = new Argument('module', $args->{'module'});
${'module168_argument'}->checkNotNull();
if(!${'module168_argument'}->isValid()) return ${'module168_argument'}->getErrorMessage();
if(${'module168_argument'} !== null) ${'module168_argument'}->setColumnType('varchar');

${'is_default169_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default169_argument'}->ensureDefaultValue('N');
${'is_default169_argument'}->checkNotNull();
if(!${'is_default169_argument'}->isValid()) return ${'is_default169_argument'}->getErrorMessage();
if(${'is_default169_argument'} !== null) ${'is_default169_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl170_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl170_argument'}->checkFilter('number');
if(!${'menu_srl170_argument'}->isValid()) return ${'menu_srl170_argument'}->getErrorMessage();
} else
${'menu_srl170_argument'} = NULL;if(${'menu_srl170_argument'} !== null) ${'menu_srl170_argument'}->setColumnType('number');

${'open_rss171_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss171_argument'}->ensureDefaultValue('Y');
${'open_rss171_argument'}->checkNotNull();
if(!${'open_rss171_argument'}->isValid()) return ${'open_rss171_argument'}->getErrorMessage();
if(${'open_rss171_argument'} !== null) ${'open_rss171_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text172_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text172_argument'}->isValid()) return ${'header_text172_argument'}->getErrorMessage();
} else
${'header_text172_argument'} = NULL;if(${'header_text172_argument'} !== null) ${'header_text172_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text173_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text173_argument'}->isValid()) return ${'footer_text173_argument'}->getErrorMessage();
} else
${'footer_text173_argument'} = NULL;if(${'footer_text173_argument'} !== null) ${'footer_text173_argument'}->setColumnType('text');

${'regdate174_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate174_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate174_argument'}->isValid()) return ${'regdate174_argument'}->getErrorMessage();
if(${'regdate174_argument'} !== null) ${'regdate174_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl175_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl175_argument'}->isValid()) return ${'mlayout_srl175_argument'}->getErrorMessage();
} else
${'mlayout_srl175_argument'} = NULL;if(${'mlayout_srl175_argument'} !== null) ${'mlayout_srl175_argument'}->setColumnType('number');

${'use_mobile176_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile176_argument'}->ensureDefaultValue('N');
if(!${'use_mobile176_argument'}->isValid()) return ${'use_mobile176_argument'}->getErrorMessage();
if(${'use_mobile176_argument'} !== null) ${'use_mobile176_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl155_argument'})
,new InsertExpression('`module_srl`', ${'module_srl156_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl157_argument'})
,new InsertExpression('`mid`', ${'mid158_argument'})
,new InsertExpression('`skin`', ${'skin159_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix160_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix161_argument'})
,new InsertExpression('`mskin`', ${'mskin162_argument'})
,new InsertExpression('`browser_title`', ${'browser_title163_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl164_argument'})
,new InsertExpression('`description`', ${'description165_argument'})
,new InsertExpression('`content`', ${'content166_argument'})
,new InsertExpression('`mcontent`', ${'mcontent167_argument'})
,new InsertExpression('`module`', ${'module168_argument'})
,new InsertExpression('`is_default`', ${'is_default169_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl170_argument'})
,new InsertExpression('`open_rss`', ${'open_rss171_argument'})
,new InsertExpression('`header_text`', ${'header_text172_argument'})
,new InsertExpression('`footer_text`', ${'footer_text173_argument'})
,new InsertExpression('`regdate`', ${'regdate174_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl175_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile176_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>