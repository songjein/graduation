<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentPageList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status1_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status1_argument'}->createConditionValue();
if(!${'status1_argument'}->isValid()) return ${'status1_argument'}->getErrorMessage();
} else
${'status1_argument'} = NULL;if(${'status1_argument'} !== null) ${'status1_argument'}->setColumnType('number');

${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkNotNull();
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('10');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('list_count');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'list_order5_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order5_argument'}->ensureDefaultValue('comments_list.arrange');
if(!${'list_order5_argument'}->isValid()) return ${'list_order5_argument'}->getErrorMessage();

${'list_order4_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order4_argument'}->ensureDefaultValue('comments_list.head');
if(!${'list_order4_argument'}->isValid()) return ${'list_order4_argument'}->getErrorMessage();

${'list_order3_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order3_argument'}->ensureDefaultValue('comments.status');
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`comments`.*')
,new SelectExpression('`comments_list`.`depth`', '`depth`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
,new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comments`.`status`',$status1_argument,"equal", 'and')
,new ConditionWithArgument('`comments_list`.`document_srl`',$document_srl2_argument,"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`comment_srl`','`comments`.`comment_srl`',"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`head`','0',"more", 'and')
,new ConditionWithoutArgument('`comments_list`.`arrange`','0',"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order3_argument'}, "desc")
,new OrderByColumn(${'list_order4_argument'}, "asc")
,new OrderByColumn(${'list_order5_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>