<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title149_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title149_argument'}->checkNotNull();
${'title149_argument'}->createConditionValue();
if(!${'title149_argument'}->isValid()) return ${'title149_argument'}->getErrorMessage();
if(${'title149_argument'} !== null) ${'title149_argument'}->setColumnType('varchar');

${'site_srl150_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl150_argument'}->ensureDefaultValue('0');
${'site_srl150_argument'}->createConditionValue();
if(!${'site_srl150_argument'}->isValid()) return ${'site_srl150_argument'}->getErrorMessage();
if(${'site_srl150_argument'} !== null) ${'site_srl150_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title149_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl150_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>