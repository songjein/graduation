<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl90_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl90_argument'}->checkNotNull();
if(!${'group_srl90_argument'}->isValid()) return ${'group_srl90_argument'}->getErrorMessage();
if(${'group_srl90_argument'} !== null) ${'group_srl90_argument'}->setColumnType('number');

${'member_srl91_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl91_argument'}->checkNotNull();
if(!${'member_srl91_argument'}->isValid()) return ${'member_srl91_argument'}->getErrorMessage();
if(${'member_srl91_argument'} !== null) ${'member_srl91_argument'}->setColumnType('number');

${'site_srl92_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl92_argument'}->ensureDefaultValue('0');
if(!${'site_srl92_argument'}->isValid()) return ${'site_srl92_argument'}->getErrorMessage();
if(${'site_srl92_argument'} !== null) ${'site_srl92_argument'}->setColumnType('number');

${'regdate93_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate93_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate93_argument'}->isValid()) return ${'regdate93_argument'}->getErrorMessage();
if(${'regdate93_argument'} !== null) ${'regdate93_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl90_argument'})
,new InsertExpression('`member_srl`', ${'member_srl91_argument'})
,new InsertExpression('`site_srl`', ${'site_srl92_argument'})
,new InsertExpression('`regdate`', ${'regdate93_argument'})
));
$query->setTables(array(
new Table('`xe_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>