<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTrigger");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name9_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name9_argument'}->createConditionValue();
if(!${'trigger_name9_argument'}->isValid()) return ${'trigger_name9_argument'}->getErrorMessage();
} else
${'trigger_name9_argument'} = NULL;if(${'trigger_name9_argument'} !== null) ${'trigger_name9_argument'}->setColumnType('varchar');
if(isset($args->module)) {
${'module10_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module10_argument'}->createConditionValue();
if(!${'module10_argument'}->isValid()) return ${'module10_argument'}->getErrorMessage();
} else
${'module10_argument'} = NULL;if(${'module10_argument'} !== null) ${'module10_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type11_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type11_argument'}->createConditionValue();
if(!${'type11_argument'}->isValid()) return ${'type11_argument'}->getErrorMessage();
} else
${'type11_argument'} = NULL;if(${'type11_argument'} !== null) ${'type11_argument'}->setColumnType('varchar');
if(isset($args->called_method)) {
${'called_method12_argument'} = new ConditionArgument('called_method', $args->called_method, 'equal');
${'called_method12_argument'}->createConditionValue();
if(!${'called_method12_argument'}->isValid()) return ${'called_method12_argument'}->getErrorMessage();
} else
${'called_method12_argument'} = NULL;if(${'called_method12_argument'} !== null) ${'called_method12_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position13_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position13_argument'}->createConditionValue();
if(!${'called_position13_argument'}->isValid()) return ${'called_position13_argument'}->getErrorMessage();
} else
${'called_position13_argument'} = NULL;if(${'called_position13_argument'} !== null) ${'called_position13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name9_argument,"equal")
,new ConditionWithArgument('`module`',$module10_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type11_argument,"equal", 'and')
,new ConditionWithArgument('`called_method`',$called_method12_argument,"equal", 'and')
,new ConditionWithArgument('`called_position`',$called_position13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>