<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl280_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl280_argument'}->isValid()) return ${'menu_srl280_argument'}->getErrorMessage();
} else
${'menu_srl280_argument'} = NULL;if(${'menu_srl280_argument'} !== null) ${'menu_srl280_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl281_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl281_argument'}->isValid()) return ${'parent_srl281_argument'}->getErrorMessage();
} else
${'parent_srl281_argument'} = NULL;if(${'parent_srl281_argument'} !== null) ${'parent_srl281_argument'}->setColumnType('number');

${'name282_argument'} = new Argument('name', $args->{'name'});
${'name282_argument'}->checkNotNull();
if(!${'name282_argument'}->isValid()) return ${'name282_argument'}->getErrorMessage();
if(${'name282_argument'} !== null) ${'name282_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url283_argument'} = new Argument('url', $args->{'url'});
if(!${'url283_argument'}->isValid()) return ${'url283_argument'}->getErrorMessage();
} else
${'url283_argument'} = NULL;if(${'url283_argument'} !== null) ${'url283_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut284_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut284_argument'}->isValid()) return ${'is_shortcut284_argument'}->getErrorMessage();
} else
${'is_shortcut284_argument'} = NULL;if(${'is_shortcut284_argument'} !== null) ${'is_shortcut284_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window285_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window285_argument'}->isValid()) return ${'open_window285_argument'}->getErrorMessage();
} else
${'open_window285_argument'} = NULL;if(${'open_window285_argument'} !== null) ${'open_window285_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand286_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand286_argument'}->isValid()) return ${'expand286_argument'}->getErrorMessage();
} else
${'expand286_argument'} = NULL;if(${'expand286_argument'} !== null) ${'expand286_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn287_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn287_argument'}->isValid()) return ${'normal_btn287_argument'}->getErrorMessage();
} else
${'normal_btn287_argument'} = NULL;if(${'normal_btn287_argument'} !== null) ${'normal_btn287_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn288_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn288_argument'}->isValid()) return ${'hover_btn288_argument'}->getErrorMessage();
} else
${'hover_btn288_argument'} = NULL;if(${'hover_btn288_argument'} !== null) ${'hover_btn288_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn289_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn289_argument'}->isValid()) return ${'active_btn289_argument'}->getErrorMessage();
} else
${'active_btn289_argument'} = NULL;if(${'active_btn289_argument'} !== null) ${'active_btn289_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls290_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls290_argument'}->isValid()) return ${'group_srls290_argument'}->getErrorMessage();
} else
${'group_srls290_argument'} = NULL;if(${'group_srls290_argument'} !== null) ${'group_srls290_argument'}->setColumnType('text');

${'menu_item_srl291_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl291_argument'}->checkFilter('number');
${'menu_item_srl291_argument'}->checkNotNull();
${'menu_item_srl291_argument'}->createConditionValue();
if(!${'menu_item_srl291_argument'}->isValid()) return ${'menu_item_srl291_argument'}->getErrorMessage();
if(${'menu_item_srl291_argument'} !== null) ${'menu_item_srl291_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl280_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl281_argument'})
,new UpdateExpression('`name`', ${'name282_argument'})
,new UpdateExpression('`url`', ${'url283_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut284_argument'})
,new UpdateExpression('`open_window`', ${'open_window285_argument'})
,new UpdateExpression('`expand`', ${'expand286_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn287_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn288_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn289_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls290_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl291_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>