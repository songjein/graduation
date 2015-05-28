<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl18_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl18_argument'}->checkFilter('number');
${'document_srl18_argument'}->checkNotNull();
${'document_srl18_argument'}->createConditionValue();
if(!${'document_srl18_argument'}->isValid()) return ${'document_srl18_argument'}->getErrorMessage();
if(${'document_srl18_argument'} !== null) ${'document_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>