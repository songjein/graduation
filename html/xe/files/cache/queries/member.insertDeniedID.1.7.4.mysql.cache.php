<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id102_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id102_argument'}->checkNotNull();
if(!${'user_id102_argument'}->isValid()) return ${'user_id102_argument'}->getErrorMessage();
if(${'user_id102_argument'} !== null) ${'user_id102_argument'}->setColumnType('varchar');

${'regdate103_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate103_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate103_argument'}->isValid()) return ${'regdate103_argument'}->getErrorMessage();
if(${'regdate103_argument'} !== null) ${'regdate103_argument'}->setColumnType('date');

${'description104_argument'} = new Argument('description', $args->{'description'});
${'description104_argument'}->ensureDefaultValue('');
if(!${'description104_argument'}->isValid()) return ${'description104_argument'}->getErrorMessage();
if(${'description104_argument'} !== null) ${'description104_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order105_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order105_argument'}->isValid()) return ${'list_order105_argument'}->getErrorMessage();
} else
${'list_order105_argument'} = NULL;if(${'list_order105_argument'} !== null) ${'list_order105_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id102_argument'})
,new InsertExpression('`regdate`', ${'regdate103_argument'})
,new InsertExpression('`description`', ${'description104_argument'})
,new InsertExpression('`list_order`', ${'list_order105_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>