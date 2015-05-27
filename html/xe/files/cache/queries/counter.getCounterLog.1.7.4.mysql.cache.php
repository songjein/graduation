<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCounterLog");
$query->setAction("select");
$query->setPriority("");

${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->ensureDefaultValue('0');
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress3_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress3_argument'}->createConditionValue();
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
} else
${'ipaddress3_argument'} = NULL;if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'regdate4_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate4_argument'}->checkNotNull();
${'regdate4_argument'}->createConditionValue();
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress3_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate4_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>