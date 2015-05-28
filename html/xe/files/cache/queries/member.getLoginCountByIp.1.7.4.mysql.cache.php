<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress97_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress97_argument'}->createConditionValue();
if(!${'ipaddress97_argument'}->isValid()) return ${'ipaddress97_argument'}->getErrorMessage();
} else
${'ipaddress97_argument'} = NULL;if(${'ipaddress97_argument'} !== null) ${'ipaddress97_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress97_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>