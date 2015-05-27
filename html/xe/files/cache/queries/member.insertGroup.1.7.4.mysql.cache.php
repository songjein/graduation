<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl31_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl31_argument'}->ensureDefaultValue('0');
${'site_srl31_argument'}->checkNotNull();
if(!${'site_srl31_argument'}->isValid()) return ${'site_srl31_argument'}->getErrorMessage();
if(${'site_srl31_argument'} !== null) ${'site_srl31_argument'}->setColumnType('number');

${'group_srl32_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl32_argument'}->checkNotNull();
if(!${'group_srl32_argument'}->isValid()) return ${'group_srl32_argument'}->getErrorMessage();
if(${'group_srl32_argument'} !== null) ${'group_srl32_argument'}->setColumnType('number');

${'group_srl33_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl33_argument'}->checkNotNull();
if(!${'group_srl33_argument'}->isValid()) return ${'group_srl33_argument'}->getErrorMessage();
if(${'group_srl33_argument'} !== null) ${'group_srl33_argument'}->setColumnType('number');

${'title34_argument'} = new Argument('title', $args->{'title'});
${'title34_argument'}->checkNotNull();
if(!${'title34_argument'}->isValid()) return ${'title34_argument'}->getErrorMessage();
if(${'title34_argument'} !== null) ${'title34_argument'}->setColumnType('varchar');

${'is_default35_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default35_argument'}->ensureDefaultValue('N');
${'is_default35_argument'}->checkNotNull();
if(!${'is_default35_argument'}->isValid()) return ${'is_default35_argument'}->getErrorMessage();
if(${'is_default35_argument'} !== null) ${'is_default35_argument'}->setColumnType('char');

${'is_admin36_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin36_argument'}->ensureDefaultValue('N');
${'is_admin36_argument'}->checkNotNull();
if(!${'is_admin36_argument'}->isValid()) return ${'is_admin36_argument'}->getErrorMessage();
if(${'is_admin36_argument'} !== null) ${'is_admin36_argument'}->setColumnType('char');

${'regdate37_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate37_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate37_argument'}->isValid()) return ${'regdate37_argument'}->getErrorMessage();
if(${'regdate37_argument'} !== null) ${'regdate37_argument'}->setColumnType('date');

${'description38_argument'} = new Argument('description', $args->{'description'});
${'description38_argument'}->ensureDefaultValue('');
if(!${'description38_argument'}->isValid()) return ${'description38_argument'}->getErrorMessage();
if(${'description38_argument'} !== null) ${'description38_argument'}->setColumnType('text');

${'image_mark39_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark39_argument'}->ensureDefaultValue('');
if(!${'image_mark39_argument'}->isValid()) return ${'image_mark39_argument'}->getErrorMessage();
if(${'image_mark39_argument'} !== null) ${'image_mark39_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl31_argument'})
,new InsertExpression('`group_srl`', ${'group_srl32_argument'})
,new InsertExpression('`list_order`', ${'group_srl33_argument'})
,new InsertExpression('`title`', ${'title34_argument'})
,new InsertExpression('`is_default`', ${'is_default35_argument'})
,new InsertExpression('`is_admin`', ${'is_admin36_argument'})
,new InsertExpression('`regdate`', ${'regdate37_argument'})
,new InsertExpression('`description`', ${'description38_argument'})
,new InsertExpression('`image_mark`', ${'image_mark39_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>