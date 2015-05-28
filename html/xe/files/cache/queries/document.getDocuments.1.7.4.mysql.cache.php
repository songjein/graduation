<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls1_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls1_argument'}->checkNotNull();
${'document_srls1_argument'}->createConditionValue();
if(!${'document_srls1_argument'}->isValid()) return ${'document_srls1_argument'}->getErrorMessage();
if(${'document_srls1_argument'} !== null) ${'document_srls1_argument'}->setColumnType('number');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('20');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'list_order2_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order2_argument'}->ensureDefaultValue('list_order');
if(!${'list_order2_argument'}->isValid()) return ${'list_order2_argument'}->getErrorMessage();

${'order_type3_argument'} = new SortArgument('order_type3', $args->order_type);
${'order_type3_argument'}->ensureDefaultValue('asc');
if(!${'order_type3_argument'}->isValid()) return ${'order_type3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order2_argument'}, $order_type3_argument)
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>