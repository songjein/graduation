<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl27_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl27_argument'}->checkFilter('number');
${'package_srl27_argument'}->checkNotNull();
if(!${'package_srl27_argument'}->isValid()) return ${'package_srl27_argument'}->getErrorMessage();
if(${'package_srl27_argument'} !== null) ${'package_srl27_argument'}->setColumnType('number');

${'version28_argument'} = new Argument('version', $args->{'version'});
${'version28_argument'}->checkNotNull();
if(!${'version28_argument'}->isValid()) return ${'version28_argument'}->getErrorMessage();
if(${'version28_argument'} !== null) ${'version28_argument'}->setColumnType('varchar');

${'current_version29_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version29_argument'}->checkNotNull();
if(!${'current_version29_argument'}->isValid()) return ${'current_version29_argument'}->getErrorMessage();
if(${'current_version29_argument'} !== null) ${'current_version29_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update30_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update30_argument'}->isValid()) return ${'need_update30_argument'}->getErrorMessage();
} else
${'need_update30_argument'} = NULL;if(${'need_update30_argument'} !== null) ${'need_update30_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl27_argument'})
,new InsertExpression('`version`', ${'version28_argument'})
,new InsertExpression('`current_version`', ${'current_version29_argument'})
,new InsertExpression('`need_update`', ${'need_update30_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>