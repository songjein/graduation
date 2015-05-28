<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTodayStatus");
$query->setAction("select");
$query->setPriority("");

${'regdate6_argument'} = new ConditionArgument('regdate', $args->regdate, 'equal');
${'regdate6_argument'}->checkNotNull();
${'regdate6_argument'}->createConditionValue();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>