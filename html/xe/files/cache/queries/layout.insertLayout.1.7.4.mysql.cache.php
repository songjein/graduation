<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl184_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl184_argument'}->checkFilter('number');
${'layout_srl184_argument'}->checkNotNull();
if(!${'layout_srl184_argument'}->isValid()) return ${'layout_srl184_argument'}->getErrorMessage();
if(${'layout_srl184_argument'} !== null) ${'layout_srl184_argument'}->setColumnType('number');

${'site_srl185_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl185_argument'}->checkFilter('number');
${'site_srl185_argument'}->ensureDefaultValue('0');
${'site_srl185_argument'}->checkNotNull();
if(!${'site_srl185_argument'}->isValid()) return ${'site_srl185_argument'}->getErrorMessage();
if(${'site_srl185_argument'} !== null) ${'site_srl185_argument'}->setColumnType('number');

${'layout186_argument'} = new Argument('layout', $args->{'layout'});
${'layout186_argument'}->checkNotNull();
if(!${'layout186_argument'}->isValid()) return ${'layout186_argument'}->getErrorMessage();
if(${'layout186_argument'} !== null) ${'layout186_argument'}->setColumnType('varchar');

${'title187_argument'} = new Argument('title', $args->{'title'});
${'title187_argument'}->checkNotNull();
if(!${'title187_argument'}->isValid()) return ${'title187_argument'}->getErrorMessage();
if(${'title187_argument'} !== null) ${'title187_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl188_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl188_argument'}->isValid()) return ${'module_srl188_argument'}->getErrorMessage();
} else
${'module_srl188_argument'} = NULL;if(${'module_srl188_argument'} !== null) ${'module_srl188_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars189_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars189_argument'}->isValid()) return ${'extra_vars189_argument'}->getErrorMessage();
} else
${'extra_vars189_argument'} = NULL;if(${'extra_vars189_argument'} !== null) ${'extra_vars189_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path190_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path190_argument'}->isValid()) return ${'layout_path190_argument'}->getErrorMessage();
} else
${'layout_path190_argument'} = NULL;if(${'layout_path190_argument'} !== null) ${'layout_path190_argument'}->setColumnType('varchar');

${'regdate191_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate191_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate191_argument'}->isValid()) return ${'regdate191_argument'}->getErrorMessage();
if(${'regdate191_argument'} !== null) ${'regdate191_argument'}->setColumnType('date');

${'layout_type192_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type192_argument'}->ensureDefaultValue('P');
if(!${'layout_type192_argument'}->isValid()) return ${'layout_type192_argument'}->getErrorMessage();
if(${'layout_type192_argument'} !== null) ${'layout_type192_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl184_argument'})
,new InsertExpression('`site_srl`', ${'site_srl185_argument'})
,new InsertExpression('`layout`', ${'layout186_argument'})
,new InsertExpression('`title`', ${'title187_argument'})
,new InsertExpression('`module_srl`', ${'module_srl188_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars189_argument'})
,new InsertExpression('`layout_path`', ${'layout_path190_argument'})
,new InsertExpression('`regdate`', ${'regdate191_argument'})
,new InsertExpression('`layout_type`', ${'layout_type192_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>