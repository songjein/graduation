<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid246_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid246_argument'}->ensureDefaultValue('Y');
${'isvalid246_argument'}->checkNotNull();
if(!${'isvalid246_argument'}->isValid()) return ${'isvalid246_argument'}->getErrorMessage();
if(${'isvalid246_argument'} !== null) ${'isvalid246_argument'}->setColumnType('char');

${'upload_target_srl247_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl247_argument'}->checkFilter('number');
${'upload_target_srl247_argument'}->checkNotNull();
${'upload_target_srl247_argument'}->createConditionValue();
if(!${'upload_target_srl247_argument'}->isValid()) return ${'upload_target_srl247_argument'}->getErrorMessage();
if(${'upload_target_srl247_argument'} !== null) ${'upload_target_srl247_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid246_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl247_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>