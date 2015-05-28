<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name115_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name115_argument'}->checkNotNull();
if(!${'component_name115_argument'}->isValid()) return ${'component_name115_argument'}->getErrorMessage();
if(${'component_name115_argument'} !== null) ${'component_name115_argument'}->setColumnType('varchar');

${'enabled116_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled116_argument'}->ensureDefaultValue('N');
if(!${'enabled116_argument'}->isValid()) return ${'enabled116_argument'}->getErrorMessage();
if(${'enabled116_argument'} !== null) ${'enabled116_argument'}->setColumnType('char');

${'list_order117_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order117_argument'}->ensureDefaultValue($sequence);
if(!${'list_order117_argument'}->isValid()) return ${'list_order117_argument'}->getErrorMessage();
if(${'list_order117_argument'} !== null) ${'list_order117_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name115_argument'})
,new InsertExpression('`enabled`', ${'enabled116_argument'})
,new InsertExpression('`list_order`', ${'list_order117_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>