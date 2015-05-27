<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCommentList");
$query->setAction("insert");
$query->setPriority("");

${'comment_srl3_argument'} = new Argument('comment_srl', $args->{'comment_srl'});
${'comment_srl3_argument'}->checkNotNull();
if(!${'comment_srl3_argument'}->isValid()) return ${'comment_srl3_argument'}->getErrorMessage();
if(${'comment_srl3_argument'} !== null) ${'comment_srl3_argument'}->setColumnType('number');

${'document_srl4_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');
if(isset($args->head)) {
${'head5_argument'} = new Argument('head', $args->{'head'});
${'head5_argument'}->checkFilter('number');
if(!${'head5_argument'}->isValid()) return ${'head5_argument'}->getErrorMessage();
} else
${'head5_argument'} = NULL;if(${'head5_argument'} !== null) ${'head5_argument'}->setColumnType('number');
if(isset($args->arrange)) {
${'arrange6_argument'} = new Argument('arrange', $args->{'arrange'});
${'arrange6_argument'}->checkFilter('number');
if(!${'arrange6_argument'}->isValid()) return ${'arrange6_argument'}->getErrorMessage();
} else
${'arrange6_argument'} = NULL;if(${'arrange6_argument'} !== null) ${'arrange6_argument'}->setColumnType('number');

${'module_srl7_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->checkNotNull();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate8_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate8_argument'}->isValid()) return ${'regdate8_argument'}->getErrorMessage();
} else
${'regdate8_argument'} = NULL;if(${'regdate8_argument'} !== null) ${'regdate8_argument'}->setColumnType('date');
if(isset($args->depth)) {
${'depth9_argument'} = new Argument('depth', $args->{'depth'});
${'depth9_argument'}->checkFilter('number');
if(!${'depth9_argument'}->isValid()) return ${'depth9_argument'}->getErrorMessage();
} else
${'depth9_argument'} = NULL;if(${'depth9_argument'} !== null) ${'depth9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`comment_srl`', ${'comment_srl3_argument'})
,new InsertExpression('`document_srl`', ${'document_srl4_argument'})
,new InsertExpression('`head`', ${'head5_argument'})
,new InsertExpression('`arrange`', ${'arrange6_argument'})
,new InsertExpression('`module_srl`', ${'module_srl7_argument'})
,new InsertExpression('`regdate`', ${'regdate8_argument'})
,new InsertExpression('`depth`', ${'depth9_argument'})
));
$query->setTables(array(
new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>