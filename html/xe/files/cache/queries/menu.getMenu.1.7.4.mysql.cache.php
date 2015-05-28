<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenu");
$query->setAction("select");
$query->setPriority("");

${'menu_srl125_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl125_argument'}->checkFilter('number');
${'menu_srl125_argument'}->checkNotNull();
${'menu_srl125_argument'}->createConditionValue();
if(!${'menu_srl125_argument'}->isValid()) return ${'menu_srl125_argument'}->getErrorMessage();
if(${'menu_srl125_argument'} !== null) ${'menu_srl125_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl125_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>