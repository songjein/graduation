<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleGrant");
$query->setAction("insert");
$query->setPriority("");

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkFilter('number');
${'module_srl2_argument'}->checkNotNull();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'name3_argument'} = new Argument('name', $args->{'name'});
${'name3_argument'}->checkNotNull();
if(!${'name3_argument'}->isValid()) return ${'name3_argument'}->getErrorMessage();
if(${'name3_argument'} !== null) ${'name3_argument'}->setColumnType('varchar');

${'group_srl4_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl4_argument'}->checkNotNull();
if(!${'group_srl4_argument'}->isValid()) return ${'group_srl4_argument'}->getErrorMessage();
if(${'group_srl4_argument'} !== null) ${'group_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`name`', ${'name3_argument'})
,new InsertExpression('`group_srl`', ${'group_srl4_argument'})
));
$query->setTables(array(
new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>