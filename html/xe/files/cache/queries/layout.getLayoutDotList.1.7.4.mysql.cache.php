<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl145_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl145_argument'}->checkFilter('number');
${'site_srl145_argument'}->ensureDefaultValue('0');
${'site_srl145_argument'}->checkNotNull();
${'site_srl145_argument'}->createConditionValue();
if(!${'site_srl145_argument'}->isValid()) return ${'site_srl145_argument'}->getErrorMessage();
if(${'site_srl145_argument'} !== null) ${'site_srl145_argument'}->setColumnType('number');

${'layout_type146_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type146_argument'}->ensureDefaultValue('P');
${'layout_type146_argument'}->createConditionValue();
if(!${'layout_type146_argument'}->isValid()) return ${'layout_type146_argument'}->getErrorMessage();
if(${'layout_type146_argument'} !== null) ${'layout_type146_argument'}->setColumnType('char');

${'layout147_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout147_argument'}->ensureDefaultValue('.');
${'layout147_argument'}->createConditionValue();
if(!${'layout147_argument'}->isValid()) return ${'layout147_argument'}->getErrorMessage();
if(${'layout147_argument'} !== null) ${'layout147_argument'}->setColumnType('varchar');

${'sort_index148_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index148_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index148_argument'}->isValid()) return ${'sort_index148_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl145_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type146_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout147_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index148_argument'}, "desc")
));
$query->setLimit();
return $query; ?>