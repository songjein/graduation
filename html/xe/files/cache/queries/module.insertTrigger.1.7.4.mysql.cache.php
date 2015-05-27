<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTrigger");
$query->setAction("insert");
$query->setPriority("");

${'trigger_name22_argument'} = new Argument('trigger_name', $args->{'trigger_name'});
${'trigger_name22_argument'}->checkNotNull();
if(!${'trigger_name22_argument'}->isValid()) return ${'trigger_name22_argument'}->getErrorMessage();
if(${'trigger_name22_argument'} !== null) ${'trigger_name22_argument'}->setColumnType('varchar');

${'module23_argument'} = new Argument('module', $args->{'module'});
${'module23_argument'}->checkNotNull();
if(!${'module23_argument'}->isValid()) return ${'module23_argument'}->getErrorMessage();
if(${'module23_argument'} !== null) ${'module23_argument'}->setColumnType('varchar');

${'type24_argument'} = new Argument('type', $args->{'type'});
${'type24_argument'}->checkNotNull();
if(!${'type24_argument'}->isValid()) return ${'type24_argument'}->getErrorMessage();
if(${'type24_argument'} !== null) ${'type24_argument'}->setColumnType('varchar');

${'called_method25_argument'} = new Argument('called_method', $args->{'called_method'});
${'called_method25_argument'}->checkNotNull();
if(!${'called_method25_argument'}->isValid()) return ${'called_method25_argument'}->getErrorMessage();
if(${'called_method25_argument'} !== null) ${'called_method25_argument'}->setColumnType('varchar');

${'called_position26_argument'} = new Argument('called_position', $args->{'called_position'});
${'called_position26_argument'}->checkNotNull();
if(!${'called_position26_argument'}->isValid()) return ${'called_position26_argument'}->getErrorMessage();
if(${'called_position26_argument'} !== null) ${'called_position26_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`trigger_name`', ${'trigger_name22_argument'})
,new InsertExpression('`module`', ${'module23_argument'})
,new InsertExpression('`type`', ${'type24_argument'})
,new InsertExpression('`called_method`', ${'called_method25_argument'})
,new InsertExpression('`called_position`', ${'called_position26_argument'})
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>