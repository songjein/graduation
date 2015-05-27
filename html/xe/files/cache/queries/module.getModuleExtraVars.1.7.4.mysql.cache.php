<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl204_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl204_argument'}->checkNotNull();
${'module_srl204_argument'}->createConditionValue();
if(!${'module_srl204_argument'}->isValid()) return ${'module_srl204_argument'}->getErrorMessage();
if(${'module_srl204_argument'} !== null) ${'module_srl204_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl204_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>