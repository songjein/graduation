<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl126_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl126_argument'}->checkFilter('number');
${'menu_srl126_argument'}->checkNotNull();
if(!${'menu_srl126_argument'}->isValid()) return ${'menu_srl126_argument'}->getErrorMessage();
if(${'menu_srl126_argument'} !== null) ${'menu_srl126_argument'}->setColumnType('number');

${'site_srl127_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl127_argument'}->checkFilter('number');
${'site_srl127_argument'}->ensureDefaultValue('0');
${'site_srl127_argument'}->checkNotNull();
if(!${'site_srl127_argument'}->isValid()) return ${'site_srl127_argument'}->getErrorMessage();
if(${'site_srl127_argument'} !== null) ${'site_srl127_argument'}->setColumnType('number');

${'title128_argument'} = new Argument('title', $args->{'title'});
${'title128_argument'}->checkNotNull();
if(!${'title128_argument'}->isValid()) return ${'title128_argument'}->getErrorMessage();
if(${'title128_argument'} !== null) ${'title128_argument'}->setColumnType('varchar');

${'listorder129_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder129_argument'}->checkNotNull();
if(!${'listorder129_argument'}->isValid()) return ${'listorder129_argument'}->getErrorMessage();
if(${'listorder129_argument'} !== null) ${'listorder129_argument'}->setColumnType('number');

${'regdate130_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate130_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate130_argument'}->isValid()) return ${'regdate130_argument'}->getErrorMessage();
if(${'regdate130_argument'} !== null) ${'regdate130_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl126_argument'})
,new InsertExpression('`site_srl`', ${'site_srl127_argument'})
,new InsertExpression('`title`', ${'title128_argument'})
,new InsertExpression('`listorder`', ${'listorder129_argument'})
,new InsertExpression('`regdate`', ${'regdate130_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>