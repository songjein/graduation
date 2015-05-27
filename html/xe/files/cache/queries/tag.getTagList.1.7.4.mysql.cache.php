<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTagList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->ensureDefaultValue('count');
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`tag`')
,new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_tags`', '`T`')
,new Table('`xe_documents`', '`D`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`T`.`document_srl`','`D`.`document_srl`',"equal")
,new ConditionWithoutArgument('`D`.`module_srl`','0',"notequal", 'and')
,new ConditionWithArgument('`T`.`module_srl`',$module_srl3_argument,"in", 'and')))
));
$query->setGroups(array(
'`tag`' ));
$query->setOrder(array(
new OrderByColumn(${'count4_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}));
return $query; ?>