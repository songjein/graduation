<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByEmailAddress");
$query->setAction("select");
$query->setPriority("");

${'email_address94_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address94_argument'}->checkNotNull();
${'email_address94_argument'}->createConditionValue();
if(!${'email_address94_argument'}->isValid()) return ${'email_address94_argument'}->getErrorMessage();
if(${'email_address94_argument'} !== null) ${'email_address94_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`email_address`',$email_address94_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>