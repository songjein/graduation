<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl121_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl121_argument'}->ensureDefaultValue('0');
${'site_srl121_argument'}->checkNotNull();
${'site_srl121_argument'}->createConditionValue();
if(!${'site_srl121_argument'}->isValid()) return ${'site_srl121_argument'}->getErrorMessage();
if(${'site_srl121_argument'} !== null) ${'site_srl121_argument'}->setColumnType('number');

${'mid122_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid122_argument'}->checkNotNull();
${'mid122_argument'}->createConditionValue();
if(!${'mid122_argument'}->isValid()) return ${'mid122_argument'}->getErrorMessage();
if(${'mid122_argument'} !== null) ${'mid122_argument'}->setColumnType('varchar');

${'module_srl123_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl123_argument'}->ensureDefaultValue('0');
${'module_srl123_argument'}->checkNotNull();
${'module_srl123_argument'}->createConditionValue();
if(!${'module_srl123_argument'}->isValid()) return ${'module_srl123_argument'}->getErrorMessage();
if(${'module_srl123_argument'} !== null) ${'module_srl123_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl121_argument,"equal")
,new ConditionWithArgument('`mid`',$mid122_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl123_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>