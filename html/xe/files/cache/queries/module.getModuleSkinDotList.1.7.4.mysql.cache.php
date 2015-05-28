<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin21_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin21_argument'}->ensureDefaultValue('.');
${'skin21_argument'}->createConditionValue();
if(!${'skin21_argument'}->isValid()) return ${'skin21_argument'}->getErrorMessage();
if(${'skin21_argument'} !== null) ${'skin21_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin21_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>