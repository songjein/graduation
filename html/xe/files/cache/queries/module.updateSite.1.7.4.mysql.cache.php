<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl292_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl292_argument'}->isValid()) return ${'index_module_srl292_argument'}->getErrorMessage();
} else
${'index_module_srl292_argument'} = NULL;if(${'index_module_srl292_argument'} !== null) ${'index_module_srl292_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain293_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain293_argument'}->isValid()) return ${'domain293_argument'}->getErrorMessage();
} else
${'domain293_argument'} = NULL;if(${'domain293_argument'} !== null) ${'domain293_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language294_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language294_argument'}->isValid()) return ${'default_language294_argument'}->getErrorMessage();
} else
${'default_language294_argument'} = NULL;if(${'default_language294_argument'} !== null) ${'default_language294_argument'}->setColumnType('varchar');

${'site_srl295_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl295_argument'}->checkFilter('number');
${'site_srl295_argument'}->checkNotNull();
${'site_srl295_argument'}->createConditionValue();
if(!${'site_srl295_argument'}->isValid()) return ${'site_srl295_argument'}->getErrorMessage();
if(${'site_srl295_argument'} !== null) ${'site_srl295_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl292_argument'})
,new UpdateExpression('`domain`', ${'domain293_argument'})
,new UpdateExpression('`default_language`', ${'default_language294_argument'})
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl295_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>