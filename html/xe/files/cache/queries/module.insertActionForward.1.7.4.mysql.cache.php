<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act118_argument'} = new Argument('act', $args->{'act'});
${'act118_argument'}->checkNotNull();
if(!${'act118_argument'}->isValid()) return ${'act118_argument'}->getErrorMessage();
if(${'act118_argument'} !== null) ${'act118_argument'}->setColumnType('varchar');

${'module119_argument'} = new Argument('module', $args->{'module'});
${'module119_argument'}->checkNotNull();
if(!${'module119_argument'}->isValid()) return ${'module119_argument'}->getErrorMessage();
if(${'module119_argument'} !== null) ${'module119_argument'}->setColumnType('varchar');

${'type120_argument'} = new Argument('type', $args->{'type'});
${'type120_argument'}->checkNotNull();
if(!${'type120_argument'}->isValid()) return ${'type120_argument'}->getErrorMessage();
if(${'type120_argument'} !== null) ${'type120_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act118_argument'})
,new InsertExpression('`module`', ${'module119_argument'})
,new InsertExpression('`type`', ${'type120_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>