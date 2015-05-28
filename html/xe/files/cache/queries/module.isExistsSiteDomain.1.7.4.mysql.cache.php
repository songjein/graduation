<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain124_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain124_argument'}->checkNotNull();
${'domain124_argument'}->createConditionValue();
if(!${'domain124_argument'}->isValid()) return ${'domain124_argument'}->getErrorMessage();
if(${'domain124_argument'} !== null) ${'domain124_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain124_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>