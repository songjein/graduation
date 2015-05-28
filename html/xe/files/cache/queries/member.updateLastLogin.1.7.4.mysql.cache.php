<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl98_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl98_argument'}->checkFilter('number');
${'member_srl98_argument'}->checkNotNull();
if(!${'member_srl98_argument'}->isValid()) return ${'member_srl98_argument'}->getErrorMessage();
if(${'member_srl98_argument'} !== null) ${'member_srl98_argument'}->setColumnType('number');

${'last_login99_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login99_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login99_argument'}->checkNotNull();
if(!${'last_login99_argument'}->isValid()) return ${'last_login99_argument'}->getErrorMessage();
if(${'last_login99_argument'} !== null) ${'last_login99_argument'}->setColumnType('date');

${'member_srl100_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl100_argument'}->checkFilter('number');
${'member_srl100_argument'}->checkNotNull();
${'member_srl100_argument'}->createConditionValue();
if(!${'member_srl100_argument'}->isValid()) return ${'member_srl100_argument'}->getErrorMessage();
if(${'member_srl100_argument'} !== null) ${'member_srl100_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl98_argument'})
,new UpdateExpression('`last_login`', ${'last_login99_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl100_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>