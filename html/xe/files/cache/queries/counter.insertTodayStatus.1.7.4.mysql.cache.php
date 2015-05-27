<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTodayStatus");
$query->setAction("insert");
$query->setPriority("");

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue('0');
${'regdate7_argument'}->checkNotNull();
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('number');

${'unique_visitor8_argument'} = new Argument('unique_visitor', $args->{'unique_visitor'});
${'unique_visitor8_argument'}->ensureDefaultValue('0');
if(!${'unique_visitor8_argument'}->isValid()) return ${'unique_visitor8_argument'}->getErrorMessage();
if(${'unique_visitor8_argument'} !== null) ${'unique_visitor8_argument'}->setColumnType('number');

${'pageview9_argument'} = new Argument('pageview', $args->{'pageview'});
${'pageview9_argument'}->ensureDefaultValue('0');
if(!${'pageview9_argument'}->isValid()) return ${'pageview9_argument'}->getErrorMessage();
if(${'pageview9_argument'} !== null) ${'pageview9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`unique_visitor`', ${'unique_visitor8_argument'})
,new InsertExpression('`pageview`', ${'pageview9_argument'})
));
$query->setTables(array(
new Table('`xe_counter_status`', '`counter_status`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>