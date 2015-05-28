<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url277_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url277_argument'}->checkNotNull();
${'url277_argument'}->createConditionValue();
if(!${'url277_argument'}->isValid()) return ${'url277_argument'}->getErrorMessage();
if(${'url277_argument'} !== null) ${'url277_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut278_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut278_argument'}->createConditionValue();
if(!${'is_shortcut278_argument'}->isValid()) return ${'is_shortcut278_argument'}->getErrorMessage();
} else
${'is_shortcut278_argument'} = NULL;if(${'is_shortcut278_argument'} !== null) ${'is_shortcut278_argument'}->setColumnType('char');

${'site_srl279_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl279_argument'}->checkNotNull();
${'site_srl279_argument'}->createConditionValue();
if(!${'site_srl279_argument'}->isValid()) return ${'site_srl279_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url277_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut278_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl279_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>