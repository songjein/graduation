<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList32_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList32_argument'}->createConditionValue();
if(!${'moduleSrlList32_argument'}->isValid()) return ${'moduleSrlList32_argument'}->getErrorMessage();
} else
${'moduleSrlList32_argument'} = NULL;if(${'moduleSrlList32_argument'} !== null) ${'moduleSrlList32_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate33_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate33_argument'}->createConditionValue();
if(!${'regDate33_argument'}->isValid()) return ${'regDate33_argument'}->getErrorMessage();
} else
${'regDate33_argument'} = NULL;if(${'regDate33_argument'} !== null) ${'regDate33_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList34_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList34_argument'}->createConditionValue();
if(!${'statusList34_argument'}->isValid()) return ${'statusList34_argument'}->getErrorMessage();
} else
${'statusList34_argument'} = NULL;if(${'statusList34_argument'} !== null) ${'statusList34_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList32_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate33_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList34_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>