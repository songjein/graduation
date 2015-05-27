<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act14_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act14_argument'}->createConditionValue();
if(!${'act14_argument'}->isValid()) return ${'act14_argument'}->getErrorMessage();
} else
${'act14_argument'} = NULL;if(${'act14_argument'} !== null) ${'act14_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act14_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>