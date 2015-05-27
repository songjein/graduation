<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateGroupDefaultClear");
$query->setAction("update");
$query->setPriority("");

${'site_srl40_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl40_argument'}->ensureDefaultValue('0');
${'site_srl40_argument'}->checkNotNull();
${'site_srl40_argument'}->createConditionValue();
if(!${'site_srl40_argument'}->isValid()) return ${'site_srl40_argument'}->getErrorMessage();
if(${'site_srl40_argument'} !== null) ${'site_srl40_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`is_default`', "'N'")
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl40_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>