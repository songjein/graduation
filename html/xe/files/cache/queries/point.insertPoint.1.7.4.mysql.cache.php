<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl249_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl249_argument'}->checkFilter('number');
${'member_srl249_argument'}->checkNotNull();
if(!${'member_srl249_argument'}->isValid()) return ${'member_srl249_argument'}->getErrorMessage();
if(${'member_srl249_argument'} !== null) ${'member_srl249_argument'}->setColumnType('number');

${'point250_argument'} = new Argument('point', $args->{'point'});
${'point250_argument'}->checkFilter('number');
${'point250_argument'}->ensureDefaultValue('0');
${'point250_argument'}->checkNotNull();
if(!${'point250_argument'}->isValid()) return ${'point250_argument'}->getErrorMessage();
if(${'point250_argument'} !== null) ${'point250_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl249_argument'})
,new InsertExpression('`point`', ${'point250_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>