<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFileList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_srl)) {
${'s_module_srl26_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl26_argument'}->createConditionValue();
if(!${'s_module_srl26_argument'}->isValid()) return ${'s_module_srl26_argument'}->getErrorMessage();
} else
${'s_module_srl26_argument'} = NULL;if(${'s_module_srl26_argument'} !== null) ${'s_module_srl26_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl27_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl27_argument'}->createConditionValue();
if(!${'exclude_module_srl27_argument'}->isValid()) return ${'exclude_module_srl27_argument'}->getErrorMessage();
} else
${'exclude_module_srl27_argument'} = NULL;if(${'exclude_module_srl27_argument'} !== null) ${'exclude_module_srl27_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid28_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid28_argument'}->createConditionValue();
if(!${'isvalid28_argument'}->isValid()) return ${'isvalid28_argument'}->getErrorMessage();
} else
${'isvalid28_argument'} = NULL;if(${'isvalid28_argument'} !== null) ${'isvalid28_argument'}->setColumnType('char');
if(isset($args->direct_download)) {
${'direct_download29_argument'} = new ConditionArgument('direct_download', $args->direct_download, 'equal');
${'direct_download29_argument'}->createConditionValue();
if(!${'direct_download29_argument'}->isValid()) return ${'direct_download29_argument'}->getErrorMessage();
} else
${'direct_download29_argument'} = NULL;if(${'direct_download29_argument'} !== null) ${'direct_download29_argument'}->setColumnType('char');
if(isset($args->s_filename)) {
${'s_filename30_argument'} = new ConditionArgument('s_filename', $args->s_filename, 'like');
${'s_filename30_argument'}->createConditionValue();
if(!${'s_filename30_argument'}->isValid()) return ${'s_filename30_argument'}->getErrorMessage();
} else
${'s_filename30_argument'} = NULL;if(${'s_filename30_argument'} !== null) ${'s_filename30_argument'}->setColumnType('varchar');
if(isset($args->s_filesize_more)) {
${'s_filesize_more31_argument'} = new ConditionArgument('s_filesize_more', $args->s_filesize_more, 'more');
${'s_filesize_more31_argument'}->createConditionValue();
if(!${'s_filesize_more31_argument'}->isValid()) return ${'s_filesize_more31_argument'}->getErrorMessage();
} else
${'s_filesize_more31_argument'} = NULL;if(${'s_filesize_more31_argument'} !== null) ${'s_filesize_more31_argument'}->setColumnType('number');
if(isset($args->s_filesize_less)) {
${'s_filesize_less32_argument'} = new ConditionArgument('s_filesize_less', $args->s_filesize_less, 'less');
${'s_filesize_less32_argument'}->createConditionValue();
if(!${'s_filesize_less32_argument'}->isValid()) return ${'s_filesize_less32_argument'}->getErrorMessage();
} else
${'s_filesize_less32_argument'} = NULL;if(${'s_filesize_less32_argument'} !== null) ${'s_filesize_less32_argument'}->setColumnType('number');
if(isset($args->s_download_count)) {
${'s_download_count33_argument'} = new ConditionArgument('s_download_count', $args->s_download_count, 'more');
${'s_download_count33_argument'}->createConditionValue();
if(!${'s_download_count33_argument'}->isValid()) return ${'s_download_count33_argument'}->getErrorMessage();
} else
${'s_download_count33_argument'} = NULL;if(${'s_download_count33_argument'} !== null) ${'s_download_count33_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate34_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate34_argument'}->createConditionValue();
if(!${'s_regdate34_argument'}->isValid()) return ${'s_regdate34_argument'}->getErrorMessage();
} else
${'s_regdate34_argument'} = NULL;if(${'s_regdate34_argument'} !== null) ${'s_regdate34_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress35_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress35_argument'}->createConditionValue();
if(!${'s_ipaddress35_argument'}->isValid()) return ${'s_ipaddress35_argument'}->getErrorMessage();
} else
${'s_ipaddress35_argument'} = NULL;if(${'s_ipaddress35_argument'} !== null) ${'s_ipaddress35_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id36_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id36_argument'}->createConditionValue();
if(!${'s_user_id36_argument'}->isValid()) return ${'s_user_id36_argument'}->getErrorMessage();
} else
${'s_user_id36_argument'} = NULL;if(${'s_user_id36_argument'} !== null) ${'s_user_id36_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name37_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name37_argument'}->createConditionValue();
if(!${'s_user_name37_argument'}->isValid()) return ${'s_user_name37_argument'}->getErrorMessage();
} else
${'s_user_name37_argument'} = NULL;if(${'s_user_name37_argument'} !== null) ${'s_user_name37_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name38_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name38_argument'}->createConditionValue();
if(!${'s_nick_name38_argument'}->isValid()) return ${'s_nick_name38_argument'}->getErrorMessage();
} else
${'s_nick_name38_argument'} = NULL;if(${'s_nick_name38_argument'} !== null) ${'s_nick_name38_argument'}->setColumnType('varchar');

${'page40_argument'} = new Argument('page', $args->{'page'});
${'page40_argument'}->ensureDefaultValue('1');
if(!${'page40_argument'}->isValid()) return ${'page40_argument'}->getErrorMessage();

${'page_count41_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count41_argument'}->ensureDefaultValue('10');
if(!${'page_count41_argument'}->isValid()) return ${'page_count41_argument'}->getErrorMessage();

${'list_count42_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count42_argument'}->ensureDefaultValue('20');
if(!${'list_count42_argument'}->isValid()) return ${'list_count42_argument'}->getErrorMessage();

${'sort_index39_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index39_argument'}->ensureDefaultValue('files.file_srl');
if(!${'sort_index39_argument'}->isValid()) return ${'sort_index39_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`files`.*')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`files`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`files`.`module_srl`',$s_module_srl26_argument,"in")
,new ConditionWithArgument('`files`.`module_srl`',$exclude_module_srl27_argument,"notin", 'and')
,new ConditionWithArgument('`files`.`isvalid`',$isvalid28_argument,"equal", 'and')
,new ConditionWithArgument('`files`.`direct_download`',$direct_download29_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`files`.`source_filename`',$s_filename30_argument,"like", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_more31_argument,"more", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_less32_argument,"less", 'or')
,new ConditionWithArgument('`files`.`download_count`',$s_download_count33_argument,"more", 'or')
,new ConditionWithArgument('`files`.`regdate`',$s_regdate34_argument,"like_prefix", 'or')
,new ConditionWithArgument('`files`.`ipaddress`',$s_ipaddress35_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id36_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_name`',$s_user_name37_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name38_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index39_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count42_argument'}, ${'page40_argument'}, ${'page_count41_argument'}));
return $query; ?>