<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module15_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module15_argument'}->checkNotNull();
${'module15_argument'}->createConditionValue();
if(!${'module15_argument'}->isValid()) return ${'module15_argument'}->getErrorMessage();
if(${'module15_argument'} !== null) ${'module15_argument'}->setColumnType('varchar');

${'site_srl16_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl16_argument'}->checkNotNull();
${'site_srl16_argument'}->createConditionValue();
if(!${'site_srl16_argument'}->isValid()) return ${'site_srl16_argument'}->getErrorMessage();
if(${'site_srl16_argument'} !== null) ${'site_srl16_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module15_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl16_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>