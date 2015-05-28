<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module202_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module202_argument'}->checkNotNull();
${'module202_argument'}->createConditionValue();
if(!${'module202_argument'}->isValid()) return ${'module202_argument'}->getErrorMessage();
if(${'module202_argument'} !== null) ${'module202_argument'}->setColumnType('varchar');

${'module_srl203_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl203_argument'}->checkNotNull();
${'module_srl203_argument'}->createConditionValue();
if(!${'module_srl203_argument'}->isValid()) return ${'module_srl203_argument'}->getErrorMessage();
if(${'module_srl203_argument'} !== null) ${'module_srl203_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module202_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl203_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>