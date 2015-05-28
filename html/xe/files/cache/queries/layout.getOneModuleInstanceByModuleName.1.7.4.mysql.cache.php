<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOneModuleInstanceByModuleName");
$query->setAction("select");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

${'d4_argument'} = new Argument('d', $args->{'d'});
${'d4_argument'}->ensureDefaultValue('1');
if(!${'d4_argument'}->isValid()) return ${'d4_argument'}->getErrorMessage();

${'d5_argument'} = new Argument('d', $args->{'d'});
${'d5_argument'}->ensureDefaultValue('10');
if(!${'d5_argument'}->isValid()) return ${'d5_argument'}->getErrorMessage();

${'d6_argument'} = new Argument('d', $args->{'d'});
${'d6_argument'}->ensureDefaultValue('1');
if(!${'d6_argument'}->isValid()) return ${'d6_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

${'order_type3_argument'} = new SortArgument('order_type3', $args->order_type);
${'order_type3_argument'}->ensureDefaultValue('asc');
if(!${'order_type3_argument'}->isValid()) return ${'order_type3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`mid`')
,new SelectExpression('`module_srl`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, $order_type3_argument)
));
$query->setLimit(new Limit(${'d6_argument'}, ${'d4_argument'}, ${'d5_argument'}));
return $query; ?>