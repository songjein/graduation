<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLoginCountByIp");
$query->setAction("update");
$query->setPriority("");

${'count1_argument'} = new Argument('count', $args->{'count'});
${'count1_argument'}->checkNotNull();
if(!${'count1_argument'}->isValid()) return ${'count1_argument'}->getErrorMessage();
if(${'count1_argument'} !== null) ${'count1_argument'}->setColumnType('number');

${'last_update2_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update2_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_update2_argument'}->checkNotNull();
if(!${'last_update2_argument'}->isValid()) return ${'last_update2_argument'}->getErrorMessage();
if(${'last_update2_argument'} !== null) ${'last_update2_argument'}->setColumnType('date');

${'ipaddress3_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress3_argument'}->checkNotNull();
${'ipaddress3_argument'}->createConditionValue();
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`count`', ${'count1_argument'})
,new UpdateExpression('`last_update`', ${'last_update2_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>