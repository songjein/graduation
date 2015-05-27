<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point254_argument'} = new Argument('point', $args->{'point'});
if(!${'point254_argument'}->isValid()) return ${'point254_argument'}->getErrorMessage();
} else
${'point254_argument'} = NULL;if(${'point254_argument'} !== null) ${'point254_argument'}->setColumnType('number');

${'member_srl255_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl255_argument'}->checkFilter('number');
${'member_srl255_argument'}->checkNotNull();
${'member_srl255_argument'}->createConditionValue();
if(!${'member_srl255_argument'}->isValid()) return ${'member_srl255_argument'}->getErrorMessage();
if(${'member_srl255_argument'} !== null) ${'member_srl255_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point254_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl255_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>