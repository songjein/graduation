<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path19_argument'} = new Argument('path', $args->{'path'});
${'path19_argument'}->checkNotNull();
if(!${'path19_argument'}->isValid()) return ${'path19_argument'}->getErrorMessage();
if(${'path19_argument'} !== null) ${'path19_argument'}->setColumnType('varchar');

${'have_instance20_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance20_argument'}->checkNotNull();
if(!${'have_instance20_argument'}->isValid()) return ${'have_instance20_argument'}->getErrorMessage();
if(${'have_instance20_argument'} !== null) ${'have_instance20_argument'}->setColumnType('char');

${'updatedate21_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate21_argument'}->checkNotNull();
if(!${'updatedate21_argument'}->isValid()) return ${'updatedate21_argument'}->getErrorMessage();
if(${'updatedate21_argument'} !== null) ${'updatedate21_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl22_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl22_argument'}->checkFilter('number');
if(!${'category_srl22_argument'}->isValid()) return ${'category_srl22_argument'}->getErrorMessage();
} else
${'category_srl22_argument'} = NULL;if(${'category_srl22_argument'} !== null) ${'category_srl22_argument'}->setColumnType('number');

${'latest_item_srl23_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl23_argument'}->checkNotNull();
if(!${'latest_item_srl23_argument'}->isValid()) return ${'latest_item_srl23_argument'}->getErrorMessage();
if(${'latest_item_srl23_argument'} !== null) ${'latest_item_srl23_argument'}->setColumnType('number');

${'version24_argument'} = new Argument('version', $args->{'version'});
${'version24_argument'}->checkNotNull();
if(!${'version24_argument'}->isValid()) return ${'version24_argument'}->getErrorMessage();
if(${'version24_argument'} !== null) ${'version24_argument'}->setColumnType('varchar');

${'package_srl25_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl25_argument'}->checkNotNull();
${'package_srl25_argument'}->createConditionValue();
if(!${'package_srl25_argument'}->isValid()) return ${'package_srl25_argument'}->getErrorMessage();
if(${'package_srl25_argument'} !== null) ${'package_srl25_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path19_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance20_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate21_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl22_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl23_argument'})
,new UpdateExpression('`version`', ${'version24_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl25_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>