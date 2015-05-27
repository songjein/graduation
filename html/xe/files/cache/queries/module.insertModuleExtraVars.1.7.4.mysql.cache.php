<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl178_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl178_argument'}->checkFilter('number');
${'module_srl178_argument'}->checkNotNull();
if(!${'module_srl178_argument'}->isValid()) return ${'module_srl178_argument'}->getErrorMessage();
if(${'module_srl178_argument'} !== null) ${'module_srl178_argument'}->setColumnType('number');

${'name179_argument'} = new Argument('name', $args->{'name'});
${'name179_argument'}->checkNotNull();
if(!${'name179_argument'}->isValid()) return ${'name179_argument'}->getErrorMessage();
if(${'name179_argument'} !== null) ${'name179_argument'}->setColumnType('varchar');

${'value180_argument'} = new Argument('value', $args->{'value'});
${'value180_argument'}->checkNotNull();
if(!${'value180_argument'}->isValid()) return ${'value180_argument'}->getErrorMessage();
if(${'value180_argument'} !== null) ${'value180_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl178_argument'})
,new InsertExpression('`name`', ${'name179_argument'})
,new InsertExpression('`value`', ${'value180_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>