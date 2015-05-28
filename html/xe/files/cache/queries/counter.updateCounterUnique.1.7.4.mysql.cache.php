<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterUnique");
$query->setAction("update");
$query->setPriority("");

${'unique_visitor14_argument'} = new Argument('unique_visitor', NULL);
${'unique_visitor14_argument'}->setColumnOperation('+');
${'unique_visitor14_argument'}->ensureDefaultValue(1);
if(!${'unique_visitor14_argument'}->isValid()) return ${'unique_visitor14_argument'}->getErrorMessage();
if(${'unique_visitor14_argument'} !== null) ${'unique_visitor14_argument'}->setColumnType('number');

${'pageview15_argument'} = new Argument('pageview', NULL);
${'pageview15_argument'}->setColumnOperation('+');
${'pageview15_argument'}->ensureDefaultValue(1);
if(!${'pageview15_argument'}->isValid()) return ${'pageview15_argument'}->getErrorMessage();
if(${'pageview15_argument'} !== null) ${'pageview15_argument'}->setColumnType('number');

${'regdate16_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate16_argument'}->checkNotNull();
${'regdate16_argument'}->createConditionValue();
if(!${'regdate16_argument'}->isValid()) return ${'regdate16_argument'}->getErrorMessage();
if(${'regdate16_argument'} !== null) ${'regdate16_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`unique_visitor`', ${'unique_visitor14_argument'})
,new UpdateExpression('`pageview`', ${'pageview15_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate16_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>