<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentDivisionUseIndex");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl2_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl2_argument'}->checkFilter('number');
${'exclude_module_srl2_argument'}->createConditionValue();
if(!${'exclude_module_srl2_argument'}->isValid()) return ${'exclude_module_srl2_argument'}->getErrorMessage();
} else
${'exclude_module_srl2_argument'} = NULL;if(${'exclude_module_srl2_argument'} !== null) ${'exclude_module_srl2_argument'}->setColumnType('number');
if(isset($args->list_order)) {
${'list_order3_argument'} = new ConditionArgument('list_order', $args->list_order, 'more');
${'list_order3_argument'}->checkFilter('number');
${'list_order3_argument'}->createConditionValue();
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();
} else
${'list_order3_argument'} = NULL;if(${'list_order3_argument'} !== null) ${'list_order3_argument'}->setColumnType('number');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('1');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('1');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

${'order_type5_argument'} = new SortArgument('order_type5', $args->order_type);
${'order_type5_argument'}->ensureDefaultValue('asc');
if(!${'order_type5_argument'}->isValid()) return ${'order_type5_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new MysqlTableWithHint('`xe_documents`', '`documents`', array(new IndexHint('`idx_list_order`', 'USE') ))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl2_argument,"notin", 'and')
,new ConditionWithArgument('`list_order`',$list_order3_argument,"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, $order_type5_argument)
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>