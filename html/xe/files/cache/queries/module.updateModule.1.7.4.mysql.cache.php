<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module256_argument'} = new Argument('module', $args->{'module'});
${'module256_argument'}->checkNotNull();
if(!${'module256_argument'}->isValid()) return ${'module256_argument'}->getErrorMessage();
if(${'module256_argument'} !== null) ${'module256_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl257_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl257_argument'}->isValid()) return ${'module_category_srl257_argument'}->getErrorMessage();
} else
${'module_category_srl257_argument'} = NULL;if(${'module_category_srl257_argument'} !== null) ${'module_category_srl257_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl258_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl258_argument'}->isValid()) return ${'layout_srl258_argument'}->getErrorMessage();
} else
${'layout_srl258_argument'} = NULL;if(${'layout_srl258_argument'} !== null) ${'layout_srl258_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin259_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin259_argument'}->isValid()) return ${'skin259_argument'}->getErrorMessage();
} else
${'skin259_argument'} = NULL;if(${'skin259_argument'} !== null) ${'skin259_argument'}->setColumnType('varchar');

${'is_skin_fix260_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix260_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix260_argument'}->isValid()) return ${'is_skin_fix260_argument'}->getErrorMessage();
if(${'is_skin_fix260_argument'} !== null) ${'is_skin_fix260_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin261_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin261_argument'}->isValid()) return ${'mskin261_argument'}->getErrorMessage();
} else
${'mskin261_argument'} = NULL;if(${'mskin261_argument'} !== null) ${'mskin261_argument'}->setColumnType('varchar');

${'is_mskin_fix262_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix262_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix262_argument'}->isValid()) return ${'is_mskin_fix262_argument'}->getErrorMessage();
if(${'is_mskin_fix262_argument'} !== null) ${'is_mskin_fix262_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl263_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl263_argument'}->checkFilter('number');
if(!${'menu_srl263_argument'}->isValid()) return ${'menu_srl263_argument'}->getErrorMessage();
} else
${'menu_srl263_argument'} = NULL;if(${'menu_srl263_argument'} !== null) ${'menu_srl263_argument'}->setColumnType('number');

${'mid264_argument'} = new Argument('mid', $args->{'mid'});
${'mid264_argument'}->checkNotNull();
if(!${'mid264_argument'}->isValid()) return ${'mid264_argument'}->getErrorMessage();
if(${'mid264_argument'} !== null) ${'mid264_argument'}->setColumnType('varchar');

${'browser_title265_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title265_argument'}->checkNotNull();
if(!${'browser_title265_argument'}->isValid()) return ${'browser_title265_argument'}->getErrorMessage();
if(${'browser_title265_argument'} !== null) ${'browser_title265_argument'}->setColumnType('varchar');

${'description266_argument'} = new Argument('description', $args->{'description'});
${'description266_argument'}->ensureDefaultValue('');
if(!${'description266_argument'}->isValid()) return ${'description266_argument'}->getErrorMessage();
if(${'description266_argument'} !== null) ${'description266_argument'}->setColumnType('text');

${'is_default267_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default267_argument'}->ensureDefaultValue('N');
${'is_default267_argument'}->checkNotNull();
if(!${'is_default267_argument'}->isValid()) return ${'is_default267_argument'}->getErrorMessage();
if(${'is_default267_argument'} !== null) ${'is_default267_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content268_argument'} = new Argument('content', $args->{'content'});
if(!${'content268_argument'}->isValid()) return ${'content268_argument'}->getErrorMessage();
} else
${'content268_argument'} = NULL;if(${'content268_argument'} !== null) ${'content268_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent269_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent269_argument'}->isValid()) return ${'mcontent269_argument'}->getErrorMessage();
} else
${'mcontent269_argument'} = NULL;if(${'mcontent269_argument'} !== null) ${'mcontent269_argument'}->setColumnType('bigtext');

${'open_rss270_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss270_argument'}->ensureDefaultValue('Y');
${'open_rss270_argument'}->checkNotNull();
if(!${'open_rss270_argument'}->isValid()) return ${'open_rss270_argument'}->getErrorMessage();
if(${'open_rss270_argument'} !== null) ${'open_rss270_argument'}->setColumnType('char');

${'header_text271_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text271_argument'}->ensureDefaultValue('');
if(!${'header_text271_argument'}->isValid()) return ${'header_text271_argument'}->getErrorMessage();
if(${'header_text271_argument'} !== null) ${'header_text271_argument'}->setColumnType('text');

${'footer_text272_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text272_argument'}->ensureDefaultValue('');
if(!${'footer_text272_argument'}->isValid()) return ${'footer_text272_argument'}->getErrorMessage();
if(${'footer_text272_argument'} !== null) ${'footer_text272_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl273_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl273_argument'}->isValid()) return ${'mlayout_srl273_argument'}->getErrorMessage();
} else
${'mlayout_srl273_argument'} = NULL;if(${'mlayout_srl273_argument'} !== null) ${'mlayout_srl273_argument'}->setColumnType('number');

${'use_mobile274_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile274_argument'}->ensureDefaultValue('N');
if(!${'use_mobile274_argument'}->isValid()) return ${'use_mobile274_argument'}->getErrorMessage();
if(${'use_mobile274_argument'} !== null) ${'use_mobile274_argument'}->setColumnType('char');

${'site_srl275_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl275_argument'}->checkFilter('number');
${'site_srl275_argument'}->ensureDefaultValue('0');
${'site_srl275_argument'}->checkNotNull();
${'site_srl275_argument'}->createConditionValue();
if(!${'site_srl275_argument'}->isValid()) return ${'site_srl275_argument'}->getErrorMessage();
if(${'site_srl275_argument'} !== null) ${'site_srl275_argument'}->setColumnType('number');

${'module_srl276_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl276_argument'}->checkFilter('number');
${'module_srl276_argument'}->checkNotNull();
${'module_srl276_argument'}->createConditionValue();
if(!${'module_srl276_argument'}->isValid()) return ${'module_srl276_argument'}->getErrorMessage();
if(${'module_srl276_argument'} !== null) ${'module_srl276_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module256_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl257_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl258_argument'})
,new UpdateExpression('`skin`', ${'skin259_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix260_argument'})
,new UpdateExpression('`mskin`', ${'mskin261_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix262_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl263_argument'})
,new UpdateExpression('`mid`', ${'mid264_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title265_argument'})
,new UpdateExpression('`description`', ${'description266_argument'})
,new UpdateExpression('`is_default`', ${'is_default267_argument'})
,new UpdateExpression('`content`', ${'content268_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent269_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss270_argument'})
,new UpdateExpression('`header_text`', ${'header_text271_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text272_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl273_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile274_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl275_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl276_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>