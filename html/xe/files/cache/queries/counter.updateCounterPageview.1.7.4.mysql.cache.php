<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCounterPageview");
$query->setAction("update");
$query->setPriority("");

${'pageview5_argument'} = new Argument('pageview', NULL);
${'pageview5_argument'}->setColumnOperation('+');
${'pageview5_argument'}->ensureDefaultValue(1);
if(!${'pageview5_argument'}->isValid()) return ${'pageview5_argument'}->getErrorMessage();
if(${'pageview5_argument'} !== null) ${'pageview5_argument'}->setColumnType('number');

${'regdate6_argument'} = new ConditionArgument('regdate', $args->regdate, 'in');
${'regdate6_argument'}->checkNotNull();
${'regdate6_argument'}->createConditionValue();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`pageview`', ${'pageview5_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate6_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>