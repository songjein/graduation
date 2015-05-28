<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl131_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl131_argument'}->checkFilter('number');
${'menu_item_srl131_argument'}->checkNotNull();
if(!${'menu_item_srl131_argument'}->isValid()) return ${'menu_item_srl131_argument'}->getErrorMessage();
if(${'menu_item_srl131_argument'} !== null) ${'menu_item_srl131_argument'}->setColumnType('number');

${'parent_srl132_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl132_argument'}->checkFilter('number');
${'parent_srl132_argument'}->ensureDefaultValue('0');
if(!${'parent_srl132_argument'}->isValid()) return ${'parent_srl132_argument'}->getErrorMessage();
if(${'parent_srl132_argument'} !== null) ${'parent_srl132_argument'}->setColumnType('number');

${'menu_srl133_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl133_argument'}->checkFilter('number');
${'menu_srl133_argument'}->checkNotNull();
if(!${'menu_srl133_argument'}->isValid()) return ${'menu_srl133_argument'}->getErrorMessage();
if(${'menu_srl133_argument'} !== null) ${'menu_srl133_argument'}->setColumnType('number');

${'name134_argument'} = new Argument('name', $args->{'name'});
${'name134_argument'}->checkNotNull();
if(!${'name134_argument'}->isValid()) return ${'name134_argument'}->getErrorMessage();
if(${'name134_argument'} !== null) ${'name134_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url135_argument'} = new Argument('url', $args->{'url'});
if(!${'url135_argument'}->isValid()) return ${'url135_argument'}->getErrorMessage();
} else
${'url135_argument'} = NULL;if(${'url135_argument'} !== null) ${'url135_argument'}->setColumnType('varchar');

${'is_shortcut136_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut136_argument'}->ensureDefaultValue('N');
${'is_shortcut136_argument'}->checkNotNull();
if(!${'is_shortcut136_argument'}->isValid()) return ${'is_shortcut136_argument'}->getErrorMessage();
if(${'is_shortcut136_argument'} !== null) ${'is_shortcut136_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window137_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window137_argument'}->isValid()) return ${'open_window137_argument'}->getErrorMessage();
} else
${'open_window137_argument'} = NULL;if(${'open_window137_argument'} !== null) ${'open_window137_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand138_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand138_argument'}->isValid()) return ${'expand138_argument'}->getErrorMessage();
} else
${'expand138_argument'} = NULL;if(${'expand138_argument'} !== null) ${'expand138_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn139_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn139_argument'}->isValid()) return ${'normal_btn139_argument'}->getErrorMessage();
} else
${'normal_btn139_argument'} = NULL;if(${'normal_btn139_argument'} !== null) ${'normal_btn139_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn140_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn140_argument'}->isValid()) return ${'hover_btn140_argument'}->getErrorMessage();
} else
${'hover_btn140_argument'} = NULL;if(${'hover_btn140_argument'} !== null) ${'hover_btn140_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn141_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn141_argument'}->isValid()) return ${'active_btn141_argument'}->getErrorMessage();
} else
${'active_btn141_argument'} = NULL;if(${'active_btn141_argument'} !== null) ${'active_btn141_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls142_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls142_argument'}->isValid()) return ${'group_srls142_argument'}->getErrorMessage();
} else
${'group_srls142_argument'} = NULL;if(${'group_srls142_argument'} !== null) ${'group_srls142_argument'}->setColumnType('text');

${'listorder143_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder143_argument'}->checkNotNull();
if(!${'listorder143_argument'}->isValid()) return ${'listorder143_argument'}->getErrorMessage();
if(${'listorder143_argument'} !== null) ${'listorder143_argument'}->setColumnType('number');

${'regdate144_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate144_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate144_argument'}->isValid()) return ${'regdate144_argument'}->getErrorMessage();
if(${'regdate144_argument'} !== null) ${'regdate144_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl131_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl132_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl133_argument'})
,new InsertExpression('`name`', ${'name134_argument'})
,new InsertExpression('`url`', ${'url135_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut136_argument'})
,new InsertExpression('`open_window`', ${'open_window137_argument'})
,new InsertExpression('`expand`', ${'expand138_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn139_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn140_argument'})
,new InsertExpression('`active_btn`', ${'active_btn141_argument'})
,new InsertExpression('`group_srls`', ${'group_srls142_argument'})
,new InsertExpression('`listorder`', ${'listorder143_argument'})
,new InsertExpression('`regdate`', ${'regdate144_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>