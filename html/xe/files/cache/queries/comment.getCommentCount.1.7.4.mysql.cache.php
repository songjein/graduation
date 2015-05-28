<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status32_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status32_argument'}->createConditionValue();
if(!${'status32_argument'}->isValid()) return ${'status32_argument'}->getErrorMessage();
} else
${'status32_argument'} = NULL;if(${'status32_argument'} !== null) ${'status32_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl33_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl33_argument'}->checkFilter('number');
${'document_srl33_argument'}->createConditionValue();
if(!${'document_srl33_argument'}->isValid()) return ${'document_srl33_argument'}->getErrorMessage();
} else
${'document_srl33_argument'} = NULL;if(${'document_srl33_argument'} !== null) ${'document_srl33_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl34_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl34_argument'}->checkFilter('number');
${'module_srl34_argument'}->createConditionValue();
if(!${'module_srl34_argument'}->isValid()) return ${'module_srl34_argument'}->getErrorMessage();
} else
${'module_srl34_argument'} = NULL;if(${'module_srl34_argument'} !== null) ${'module_srl34_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate35_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate35_argument'}->createConditionValue();
if(!${'regDate35_argument'}->isValid()) return ${'regDate35_argument'}->getErrorMessage();
} else
${'regDate35_argument'} = NULL;if(${'regDate35_argument'} !== null) ${'regDate35_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status32_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl33_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl34_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate35_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>