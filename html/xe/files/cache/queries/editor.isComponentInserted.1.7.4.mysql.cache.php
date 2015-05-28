<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isComponentInserted");
$query->setAction("select");
$query->setPriority("");

${'component_name114_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name114_argument'}->checkNotNull();
${'component_name114_argument'}->createConditionValue();
if(!${'component_name114_argument'}->isValid()) return ${'component_name114_argument'}->getErrorMessage();
if(${'component_name114_argument'} !== null) ${'component_name114_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name114_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>