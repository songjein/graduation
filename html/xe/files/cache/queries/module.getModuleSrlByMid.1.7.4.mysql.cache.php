<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSrlByMid");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = NULL;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'mid2_argument'} = new ConditionArgument('mid', $args->mid, 'in');
${'mid2_argument'}->checkNotNull();
${'mid2_argument'}->createConditionValue();
if(!${'mid2_argument'}->isValid()) return ${'mid2_argument'}->getErrorMessage();
if(${'mid2_argument'} !== null) ${'mid2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`mid`',$mid2_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>