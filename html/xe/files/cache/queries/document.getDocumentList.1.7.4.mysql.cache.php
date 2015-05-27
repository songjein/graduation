<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl35_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl35_argument'}->checkFilter('number');
${'module_srl35_argument'}->createConditionValue();
if(!${'module_srl35_argument'}->isValid()) return ${'module_srl35_argument'}->getErrorMessage();
} else
${'module_srl35_argument'} = NULL;if(${'module_srl35_argument'} !== null) ${'module_srl35_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl36_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl36_argument'}->checkFilter('number');
${'exclude_module_srl36_argument'}->createConditionValue();
if(!${'exclude_module_srl36_argument'}->isValid()) return ${'exclude_module_srl36_argument'}->getErrorMessage();
} else
${'exclude_module_srl36_argument'} = NULL;if(${'exclude_module_srl36_argument'} !== null) ${'exclude_module_srl36_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl37_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl37_argument'}->createConditionValue();
if(!${'category_srl37_argument'}->isValid()) return ${'category_srl37_argument'}->getErrorMessage();
} else
${'category_srl37_argument'} = NULL;if(${'category_srl37_argument'} !== null) ${'category_srl37_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice38_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice38_argument'}->createConditionValue();
if(!${'s_is_notice38_argument'}->isValid()) return ${'s_is_notice38_argument'}->getErrorMessage();
} else
${'s_is_notice38_argument'} = NULL;if(${'s_is_notice38_argument'} !== null) ${'s_is_notice38_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl39_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl39_argument'}->checkFilter('number');
${'member_srl39_argument'}->createConditionValue();
if(!${'member_srl39_argument'}->isValid()) return ${'member_srl39_argument'}->getErrorMessage();
} else
${'member_srl39_argument'} = NULL;if(${'member_srl39_argument'} !== null) ${'member_srl39_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList40_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList40_argument'}->createConditionValue();
if(!${'statusList40_argument'}->isValid()) return ${'statusList40_argument'}->getErrorMessage();
} else
${'statusList40_argument'} = NULL;if(${'statusList40_argument'} !== null) ${'statusList40_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division41_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division41_argument'}->createConditionValue();
if(!${'division41_argument'}->isValid()) return ${'division41_argument'}->getErrorMessage();
} else
${'division41_argument'} = NULL;if(${'division41_argument'} !== null) ${'division41_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division42_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division42_argument'}->createConditionValue();
if(!${'last_division42_argument'}->isValid()) return ${'last_division42_argument'}->getErrorMessage();
} else
${'last_division42_argument'} = NULL;if(${'last_division42_argument'} !== null) ${'last_division42_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title43_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title43_argument'}->createConditionValue();
if(!${'s_title43_argument'}->isValid()) return ${'s_title43_argument'}->getErrorMessage();
} else
${'s_title43_argument'} = NULL;if(${'s_title43_argument'} !== null) ${'s_title43_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content44_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content44_argument'}->createConditionValue();
if(!${'s_content44_argument'}->isValid()) return ${'s_content44_argument'}->getErrorMessage();
} else
${'s_content44_argument'} = NULL;if(${'s_content44_argument'} !== null) ${'s_content44_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name45_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name45_argument'}->createConditionValue();
if(!${'s_user_name45_argument'}->isValid()) return ${'s_user_name45_argument'}->getErrorMessage();
} else
${'s_user_name45_argument'} = NULL;if(${'s_user_name45_argument'} !== null) ${'s_user_name45_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id46_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id46_argument'}->createConditionValue();
if(!${'s_user_id46_argument'}->isValid()) return ${'s_user_id46_argument'}->getErrorMessage();
} else
${'s_user_id46_argument'} = NULL;if(${'s_user_id46_argument'} !== null) ${'s_user_id46_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name47_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name47_argument'}->createConditionValue();
if(!${'s_nick_name47_argument'}->isValid()) return ${'s_nick_name47_argument'}->getErrorMessage();
} else
${'s_nick_name47_argument'} = NULL;if(${'s_nick_name47_argument'} !== null) ${'s_nick_name47_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address48_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address48_argument'}->createConditionValue();
if(!${'s_email_address48_argument'}->isValid()) return ${'s_email_address48_argument'}->getErrorMessage();
} else
${'s_email_address48_argument'} = NULL;if(${'s_email_address48_argument'} !== null) ${'s_email_address48_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage49_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage49_argument'}->createConditionValue();
if(!${'s_homepage49_argument'}->isValid()) return ${'s_homepage49_argument'}->getErrorMessage();
} else
${'s_homepage49_argument'} = NULL;if(${'s_homepage49_argument'} !== null) ${'s_homepage49_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags50_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags50_argument'}->createConditionValue();
if(!${'s_tags50_argument'}->isValid()) return ${'s_tags50_argument'}->getErrorMessage();
} else
${'s_tags50_argument'} = NULL;if(${'s_tags50_argument'} !== null) ${'s_tags50_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl51_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl51_argument'}->createConditionValue();
if(!${'s_member_srl51_argument'}->isValid()) return ${'s_member_srl51_argument'}->getErrorMessage();
} else
${'s_member_srl51_argument'} = NULL;if(${'s_member_srl51_argument'} !== null) ${'s_member_srl51_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count52_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count52_argument'}->createConditionValue();
if(!${'s_readed_count52_argument'}->isValid()) return ${'s_readed_count52_argument'}->getErrorMessage();
} else
${'s_readed_count52_argument'} = NULL;if(${'s_readed_count52_argument'} !== null) ${'s_readed_count52_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count53_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count53_argument'}->createConditionValue();
if(!${'s_voted_count53_argument'}->isValid()) return ${'s_voted_count53_argument'}->getErrorMessage();
} else
${'s_voted_count53_argument'} = NULL;if(${'s_voted_count53_argument'} !== null) ${'s_voted_count53_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count54_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count54_argument'}->createConditionValue();
if(!${'s_blamed_count54_argument'}->isValid()) return ${'s_blamed_count54_argument'}->getErrorMessage();
} else
${'s_blamed_count54_argument'} = NULL;if(${'s_blamed_count54_argument'} !== null) ${'s_blamed_count54_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count55_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count55_argument'}->createConditionValue();
if(!${'s_comment_count55_argument'}->isValid()) return ${'s_comment_count55_argument'}->getErrorMessage();
} else
${'s_comment_count55_argument'} = NULL;if(${'s_comment_count55_argument'} !== null) ${'s_comment_count55_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count56_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count56_argument'}->createConditionValue();
if(!${'s_trackback_count56_argument'}->isValid()) return ${'s_trackback_count56_argument'}->getErrorMessage();
} else
${'s_trackback_count56_argument'} = NULL;if(${'s_trackback_count56_argument'} !== null) ${'s_trackback_count56_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count57_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count57_argument'}->createConditionValue();
if(!${'s_uploaded_count57_argument'}->isValid()) return ${'s_uploaded_count57_argument'}->getErrorMessage();
} else
${'s_uploaded_count57_argument'} = NULL;if(${'s_uploaded_count57_argument'} !== null) ${'s_uploaded_count57_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate58_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate58_argument'}->createConditionValue();
if(!${'s_regdate58_argument'}->isValid()) return ${'s_regdate58_argument'}->getErrorMessage();
} else
${'s_regdate58_argument'} = NULL;if(${'s_regdate58_argument'} !== null) ${'s_regdate58_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update59_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update59_argument'}->createConditionValue();
if(!${'s_last_update59_argument'}->isValid()) return ${'s_last_update59_argument'}->getErrorMessage();
} else
${'s_last_update59_argument'} = NULL;if(${'s_last_update59_argument'} !== null) ${'s_last_update59_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress60_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress60_argument'}->createConditionValue();
if(!${'s_ipaddress60_argument'}->isValid()) return ${'s_ipaddress60_argument'}->getErrorMessage();
} else
${'s_ipaddress60_argument'} = NULL;if(${'s_ipaddress60_argument'} !== null) ${'s_ipaddress60_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date61_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date61_argument'}->createConditionValue();
if(!${'start_date61_argument'}->isValid()) return ${'start_date61_argument'}->getErrorMessage();
} else
${'start_date61_argument'} = NULL;if(${'start_date61_argument'} !== null) ${'start_date61_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date62_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date62_argument'}->createConditionValue();
if(!${'end_date62_argument'}->isValid()) return ${'end_date62_argument'}->getErrorMessage();
} else
${'end_date62_argument'} = NULL;if(${'end_date62_argument'} !== null) ${'end_date62_argument'}->setColumnType('date');

${'page65_argument'} = new Argument('page', $args->{'page'});
${'page65_argument'}->ensureDefaultValue('1');
if(!${'page65_argument'}->isValid()) return ${'page65_argument'}->getErrorMessage();

${'page_count66_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count66_argument'}->ensureDefaultValue('10');
if(!${'page_count66_argument'}->isValid()) return ${'page_count66_argument'}->getErrorMessage();

${'list_count67_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count67_argument'}->ensureDefaultValue('20');
if(!${'list_count67_argument'}->isValid()) return ${'list_count67_argument'}->getErrorMessage();

${'sort_index63_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index63_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index63_argument'}->isValid()) return ${'sort_index63_argument'}->getErrorMessage();

${'order_type64_argument'} = new SortArgument('order_type64', $args->order_type);
${'order_type64_argument'}->ensureDefaultValue('asc');
if(!${'order_type64_argument'}->isValid()) return ${'order_type64_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl35_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl36_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl37_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice38_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl39_argument,"equal", 'and')
,new ConditionWithArgument('`status`',$statusList40_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division41_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division42_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title43_argument,"like")
,new ConditionWithArgument('`content`',$s_content44_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name45_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id46_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name47_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address48_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage49_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags50_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl51_argument,"equal", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count52_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count53_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count54_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count55_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count56_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count57_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate58_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update59_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress60_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date61_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date62_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index63_argument'}, $order_type64_argument)
));
$query->setLimit(new Limit(${'list_count67_argument'}, ${'page65_argument'}, ${'page_count66_argument'}));
return $query; ?>