<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCounterLog");
$query->setAction("insert");
$query->setPriority("");

${'site_srl10_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl10_argument'}->ensureDefaultValue('0');
${'site_srl10_argument'}->checkNotNull();
if(!${'site_srl10_argument'}->isValid()) return ${'site_srl10_argument'}->getErrorMessage();
if(${'site_srl10_argument'} !== null) ${'site_srl10_argument'}->setColumnType('number');

${'regdate11_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate11_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate11_argument'}->checkNotNull();
if(!${'regdate11_argument'}->isValid()) return ${'regdate11_argument'}->getErrorMessage();
if(${'regdate11_argument'} !== null) ${'regdate11_argument'}->setColumnType('date');

${'ipaddress12_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress12_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
${'ipaddress12_argument'}->checkNotNull();
if(!${'ipaddress12_argument'}->isValid()) return ${'ipaddress12_argument'}->getErrorMessage();
if(${'ipaddress12_argument'} !== null) ${'ipaddress12_argument'}->setColumnType('varchar');
if(isset($args->user_agent)) {
${'user_agent13_argument'} = new Argument('user_agent', $args->{'user_agent'});
if(!${'user_agent13_argument'}->isValid()) return ${'user_agent13_argument'}->getErrorMessage();
} else
${'user_agent13_argument'} = NULL;if(${'user_agent13_argument'} !== null) ${'user_agent13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl10_argument'})
,new InsertExpression('`regdate`', ${'regdate11_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress12_argument'})
,new InsertExpression('`user_agent`', ${'user_agent13_argument'})
));
$query->setTables(array(
new Table('`xe_counter_log`', '`counter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>