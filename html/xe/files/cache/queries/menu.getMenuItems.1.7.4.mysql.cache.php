<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl181_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl181_argument'}->checkFilter('number');
${'menu_srl181_argument'}->checkNotNull();
${'menu_srl181_argument'}->createConditionValue();
if(!${'menu_srl181_argument'}->isValid()) return ${'menu_srl181_argument'}->getErrorMessage();
if(${'menu_srl181_argument'} !== null) ${'menu_srl181_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl182_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl182_argument'}->checkFilter('number');
${'parent_srl182_argument'}->createConditionValue();
if(!${'parent_srl182_argument'}->isValid()) return ${'parent_srl182_argument'}->getErrorMessage();
} else
${'parent_srl182_argument'} = NULL;if(${'parent_srl182_argument'} !== null) ${'parent_srl182_argument'}->setColumnType('number');

${'sort_index183_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index183_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index183_argument'}->isValid()) return ${'sort_index183_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl181_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl182_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index183_argument'}, "desc")
));
$query->setLimit();
return $query; ?>