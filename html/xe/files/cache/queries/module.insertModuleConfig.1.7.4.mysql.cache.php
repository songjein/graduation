<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module17_argument'} = new Argument('module', $args->{'module'});
${'module17_argument'}->checkNotNull();
if(!${'module17_argument'}->isValid()) return ${'module17_argument'}->getErrorMessage();
if(${'module17_argument'} !== null) ${'module17_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config18_argument'} = new Argument('config', $args->{'config'});
if(!${'config18_argument'}->isValid()) return ${'config18_argument'}->getErrorMessage();
} else
${'config18_argument'} = NULL;if(${'config18_argument'} !== null) ${'config18_argument'}->setColumnType('text');

${'site_srl19_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl19_argument'}->checkNotNull();
if(!${'site_srl19_argument'}->isValid()) return ${'site_srl19_argument'}->getErrorMessage();
if(${'site_srl19_argument'} !== null) ${'site_srl19_argument'}->setColumnType('number');

${'regdate20_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate20_argument'}->isValid()) return ${'regdate20_argument'}->getErrorMessage();
if(${'regdate20_argument'} !== null) ${'regdate20_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module17_argument'})
,new InsertExpression('`config`', ${'config18_argument'})
,new InsertExpression('`site_srl`', ${'site_srl19_argument'})
,new InsertExpression('`regdate`', ${'regdate20_argument'})
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>