<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentCount");
$query->setAction("update");
$query->setPriority("");

${'comment_count36_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count36_argument'}->checkNotNull();
if(!${'comment_count36_argument'}->isValid()) return ${'comment_count36_argument'}->getErrorMessage();
if(${'comment_count36_argument'} !== null) ${'comment_count36_argument'}->setColumnType('number');
if(isset($args->update_order)) {
${'update_order37_argument'} = new Argument('update_order', $args->{'update_order'});
if(!${'update_order37_argument'}->isValid()) return ${'update_order37_argument'}->getErrorMessage();
} else
${'update_order37_argument'} = NULL;if(${'update_order37_argument'} !== null) ${'update_order37_argument'}->setColumnType('number');

${'last_update38_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update38_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update38_argument'}->isValid()) return ${'last_update38_argument'}->getErrorMessage();
if(${'last_update38_argument'} !== null) ${'last_update38_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater39_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater39_argument'}->isValid()) return ${'last_updater39_argument'}->getErrorMessage();
} else
${'last_updater39_argument'} = NULL;if(${'last_updater39_argument'} !== null) ${'last_updater39_argument'}->setColumnType('varchar');

${'document_srl40_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl40_argument'}->checkFilter('number');
${'document_srl40_argument'}->checkNotNull();
${'document_srl40_argument'}->createConditionValue();
if(!${'document_srl40_argument'}->isValid()) return ${'document_srl40_argument'}->getErrorMessage();
if(${'document_srl40_argument'} !== null) ${'document_srl40_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`comment_count`', ${'comment_count36_argument'})
,new UpdateExpression('`update_order`', ${'update_order37_argument'})
,new UpdateExpression('`last_update`', ${'last_update38_argument'})
,new UpdateExpression('`last_updater`', ${'last_updater39_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl40_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>