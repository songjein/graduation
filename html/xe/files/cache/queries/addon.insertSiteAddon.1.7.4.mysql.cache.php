<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl106_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl106_argument'}->checkNotNull();
if(!${'site_srl106_argument'}->isValid()) return ${'site_srl106_argument'}->getErrorMessage();
if(${'site_srl106_argument'} !== null) ${'site_srl106_argument'}->setColumnType('number');

${'addon107_argument'} = new Argument('addon', $args->{'addon'});
${'addon107_argument'}->checkNotNull();
if(!${'addon107_argument'}->isValid()) return ${'addon107_argument'}->getErrorMessage();
if(${'addon107_argument'} !== null) ${'addon107_argument'}->setColumnType('varchar');

${'is_used108_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used108_argument'}->ensureDefaultValue('N');
${'is_used108_argument'}->checkNotNull();
if(!${'is_used108_argument'}->isValid()) return ${'is_used108_argument'}->getErrorMessage();
if(${'is_used108_argument'} !== null) ${'is_used108_argument'}->setColumnType('char');

${'is_used_m109_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m109_argument'}->ensureDefaultValue('N');
if(!${'is_used_m109_argument'}->isValid()) return ${'is_used_m109_argument'}->getErrorMessage();
if(${'is_used_m109_argument'} !== null) ${'is_used_m109_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars110_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars110_argument'}->isValid()) return ${'extra_vars110_argument'}->getErrorMessage();
} else
${'extra_vars110_argument'} = NULL;if(${'extra_vars110_argument'} !== null) ${'extra_vars110_argument'}->setColumnType('text');

${'regdate111_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate111_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate111_argument'}->isValid()) return ${'regdate111_argument'}->getErrorMessage();
if(${'regdate111_argument'} !== null) ${'regdate111_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl106_argument'})
,new InsertExpression('`addon`', ${'addon107_argument'})
,new InsertExpression('`is_used`', ${'is_used108_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m109_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars110_argument'})
,new InsertExpression('`regdate`', ${'regdate111_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>