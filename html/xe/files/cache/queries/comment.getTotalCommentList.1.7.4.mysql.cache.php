<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_srl)) {
${'s_module_srl9_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl9_argument'}->createConditionValue();
if(!${'s_module_srl9_argument'}->isValid()) return ${'s_module_srl9_argument'}->getErrorMessage();
} else
${'s_module_srl9_argument'} = NULL;if(${'s_module_srl9_argument'} !== null) ${'s_module_srl9_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl10_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl10_argument'}->createConditionValue();
if(!${'exclude_module_srl10_argument'}->isValid()) return ${'exclude_module_srl10_argument'}->getErrorMessage();
} else
${'exclude_module_srl10_argument'} = NULL;if(${'exclude_module_srl10_argument'} !== null) ${'exclude_module_srl10_argument'}->setColumnType('number');
if(isset($args->s_is_secret)) {
${'s_is_secret11_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret11_argument'}->createConditionValue();
if(!${'s_is_secret11_argument'}->isValid()) return ${'s_is_secret11_argument'}->getErrorMessage();
} else
${'s_is_secret11_argument'} = NULL;if(${'s_is_secret11_argument'} !== null) ${'s_is_secret11_argument'}->setColumnType('char');
if(isset($args->s_is_published)) {
${'s_is_published12_argument'} = new ConditionArgument('s_is_published', $args->s_is_published, 'equal');
${'s_is_published12_argument'}->createConditionValue();
if(!${'s_is_published12_argument'}->isValid()) return ${'s_is_published12_argument'}->getErrorMessage();
} else
${'s_is_published12_argument'} = NULL;if(${'s_is_published12_argument'} !== null) ${'s_is_published12_argument'}->setColumnType('number');
if(isset($args->s_content)) {
${'s_content13_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content13_argument'}->createConditionValue();
if(!${'s_content13_argument'}->isValid()) return ${'s_content13_argument'}->getErrorMessage();
} else
${'s_content13_argument'} = NULL;if(${'s_content13_argument'} !== null) ${'s_content13_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name14_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name14_argument'}->createConditionValue();
if(!${'s_user_name14_argument'}->isValid()) return ${'s_user_name14_argument'}->getErrorMessage();
} else
${'s_user_name14_argument'} = NULL;if(${'s_user_name14_argument'} !== null) ${'s_user_name14_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name15_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name15_argument'}->createConditionValue();
if(!${'s_nick_name15_argument'}->isValid()) return ${'s_nick_name15_argument'}->getErrorMessage();
} else
${'s_nick_name15_argument'} = NULL;if(${'s_nick_name15_argument'} !== null) ${'s_nick_name15_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address16_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address16_argument'}->createConditionValue();
if(!${'s_email_address16_argument'}->isValid()) return ${'s_email_address16_argument'}->getErrorMessage();
} else
${'s_email_address16_argument'} = NULL;if(${'s_email_address16_argument'} !== null) ${'s_email_address16_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage17_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage17_argument'}->createConditionValue();
if(!${'s_homepage17_argument'}->isValid()) return ${'s_homepage17_argument'}->getErrorMessage();
} else
${'s_homepage17_argument'} = NULL;if(${'s_homepage17_argument'} !== null) ${'s_homepage17_argument'}->setColumnType('varchar');
if(isset($args->s_member_srl)) {
${'s_member_srl18_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl18_argument'}->createConditionValue();
if(!${'s_member_srl18_argument'}->isValid()) return ${'s_member_srl18_argument'}->getErrorMessage();
} else
${'s_member_srl18_argument'} = NULL;if(${'s_member_srl18_argument'} !== null) ${'s_member_srl18_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate19_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate19_argument'}->createConditionValue();
if(!${'s_regdate19_argument'}->isValid()) return ${'s_regdate19_argument'}->getErrorMessage();
} else
${'s_regdate19_argument'} = NULL;if(${'s_regdate19_argument'} !== null) ${'s_regdate19_argument'}->setColumnType('date');
if(isset($args->s_last_upate)) {
${'s_last_upate20_argument'} = new ConditionArgument('s_last_upate', $args->s_last_upate, 'like_prefix');
${'s_last_upate20_argument'}->createConditionValue();
if(!${'s_last_upate20_argument'}->isValid()) return ${'s_last_upate20_argument'}->getErrorMessage();
} else
${'s_last_upate20_argument'} = NULL;if(${'s_last_upate20_argument'} !== null) ${'s_last_upate20_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress21_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress21_argument'}->createConditionValue();
if(!${'s_ipaddress21_argument'}->isValid()) return ${'s_ipaddress21_argument'}->getErrorMessage();
} else
${'s_ipaddress21_argument'} = NULL;if(${'s_ipaddress21_argument'} !== null) ${'s_ipaddress21_argument'}->setColumnType('varchar');

${'page23_argument'} = new Argument('page', $args->{'page'});
${'page23_argument'}->ensureDefaultValue('1');
if(!${'page23_argument'}->isValid()) return ${'page23_argument'}->getErrorMessage();

${'page_count24_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count24_argument'}->ensureDefaultValue('10');
if(!${'page_count24_argument'}->isValid()) return ${'page_count24_argument'}->getErrorMessage();

${'list_count25_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count25_argument'}->ensureDefaultValue('20');
if(!${'list_count25_argument'}->isValid()) return ${'list_count25_argument'}->getErrorMessage();

${'sort_index22_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index22_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index22_argument'}->isValid()) return ${'sort_index22_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$s_module_srl9_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl10_argument,"notin", 'and')
,new ConditionWithArgument('`is_secret`',$s_is_secret11_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$s_is_published12_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`content`',$s_content13_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name14_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name15_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address16_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage17_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl18_argument,"equal", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate19_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_upate20_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress21_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index22_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count25_argument'}, ${'page23_argument'}, ${'page_count24_argument'}));
return $query; ?>