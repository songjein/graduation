<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountByIp");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress1_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress1_argument'}->checkNotNull();
if(!${'ipaddress1_argument'}->isValid()) return ${'ipaddress1_argument'}->getErrorMessage();
if(${'ipaddress1_argument'} !== null) ${'ipaddress1_argument'}->setColumnType('varchar');

${'count2_argument'} = new Argument('count', $args->{'count'});
${'count2_argument'}->checkNotNull();
if(!${'count2_argument'}->isValid()) return ${'count2_argument'}->getErrorMessage();
if(${'count2_argument'} !== null) ${'count2_argument'}->setColumnType('number');

${'regdate3_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate3_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');

${'last_update4_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update4_argument'}->isValid()) return ${'last_update4_argument'}->getErrorMessage();
if(${'last_update4_argument'} !== null) ${'last_update4_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress1_argument'})
,new InsertExpression('`count`', ${'count2_argument'})
,new InsertExpression('`regdate`', ${'regdate3_argument'})
,new InsertExpression('`last_update`', ${'last_update4_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>