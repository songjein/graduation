<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate31_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate31_argument'}->createConditionValue();
if(!${'regDate31_argument'}->isValid()) return ${'regDate31_argument'}->getErrorMessage();
} else
${'regDate31_argument'} = NULL;if(${'regDate31_argument'} !== null) ${'regDate31_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate31_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>