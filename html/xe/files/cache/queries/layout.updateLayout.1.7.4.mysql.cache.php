<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title193_argument'} = new Argument('title', $args->{'title'});
if(!${'title193_argument'}->isValid()) return ${'title193_argument'}->getErrorMessage();
} else
${'title193_argument'} = NULL;if(${'title193_argument'} !== null) ${'title193_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars194_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars194_argument'}->isValid()) return ${'extra_vars194_argument'}->getErrorMessage();
} else
${'extra_vars194_argument'} = NULL;if(${'extra_vars194_argument'} !== null) ${'extra_vars194_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout195_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout195_argument'}->isValid()) return ${'layout195_argument'}->getErrorMessage();
} else
${'layout195_argument'} = NULL;if(${'layout195_argument'} !== null) ${'layout195_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path196_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path196_argument'}->isValid()) return ${'layout_path196_argument'}->getErrorMessage();
} else
${'layout_path196_argument'} = NULL;if(${'layout_path196_argument'} !== null) ${'layout_path196_argument'}->setColumnType('varchar');

${'layout_srl197_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl197_argument'}->checkFilter('number');
${'layout_srl197_argument'}->checkNotNull();
${'layout_srl197_argument'}->createConditionValue();
if(!${'layout_srl197_argument'}->isValid()) return ${'layout_srl197_argument'}->getErrorMessage();
if(${'layout_srl197_argument'} !== null) ${'layout_srl197_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title193_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars194_argument'})
,new UpdateExpression('`layout`', ${'layout195_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path196_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl197_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>