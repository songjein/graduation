<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleCategories");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleCategorySrl)) {
${'moduleCategorySrl2_argument'} = new ConditionArgument('moduleCategorySrl', $args->moduleCategorySrl, 'in');
${'moduleCategorySrl2_argument'}->createConditionValue();
if(!${'moduleCategorySrl2_argument'}->isValid()) return ${'moduleCategorySrl2_argument'}->getErrorMessage();
} else
${'moduleCategorySrl2_argument'} = NULL;if(${'moduleCategorySrl2_argument'} !== null) ${'moduleCategorySrl2_argument'}->setColumnType('number');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('title');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_categories`', '`module_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_category_srl`',$moduleCategorySrl2_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "asc")
));
$query->setLimit();
return $query; ?>