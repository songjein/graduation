<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountHistoryByMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl101_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl101_argument'}->createConditionValue();
if(!${'member_srl101_argument'}->isValid()) return ${'member_srl101_argument'}->getErrorMessage();
} else
${'member_srl101_argument'} = NULL;if(${'member_srl101_argument'} !== null) ${'member_srl101_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl101_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>