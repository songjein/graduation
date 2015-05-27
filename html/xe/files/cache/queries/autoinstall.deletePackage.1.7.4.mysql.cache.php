<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path1_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path1_argument'}->checkNotNull();
${'path1_argument'}->createConditionValue();
if(!${'path1_argument'}->isValid()) return ${'path1_argument'}->getErrorMessage();
if(${'path1_argument'} !== null) ${'path1_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>