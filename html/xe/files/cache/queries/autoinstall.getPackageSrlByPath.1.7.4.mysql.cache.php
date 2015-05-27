<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageSqlByPath");
$query->setAction("select");
$query->setPriority("");

${'path3_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path3_argument'}->checkNotNull();
${'path3_argument'}->createConditionValue();
if(!${'path3_argument'}->isValid()) return ${'path3_argument'}->getErrorMessage();
if(${'path3_argument'} !== null) ${'path3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`package_srl`')
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>