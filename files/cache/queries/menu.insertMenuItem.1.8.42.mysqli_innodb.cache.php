<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl81_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl81_argument'}->checkFilter('number');
${'menu_item_srl81_argument'}->checkNotNull();
if(!${'menu_item_srl81_argument'}->isValid()) return ${'menu_item_srl81_argument'}->getErrorMessage();
if(${'menu_item_srl81_argument'} !== null) ${'menu_item_srl81_argument'}->setColumnType('number');

${'parent_srl82_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl82_argument'}->checkFilter('number');
${'parent_srl82_argument'}->ensureDefaultValue('0');
if(!${'parent_srl82_argument'}->isValid()) return ${'parent_srl82_argument'}->getErrorMessage();
if(${'parent_srl82_argument'} !== null) ${'parent_srl82_argument'}->setColumnType('number');

${'menu_srl83_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl83_argument'}->checkFilter('number');
${'menu_srl83_argument'}->checkNotNull();
if(!${'menu_srl83_argument'}->isValid()) return ${'menu_srl83_argument'}->getErrorMessage();
if(${'menu_srl83_argument'} !== null) ${'menu_srl83_argument'}->setColumnType('number');

${'name84_argument'} = new Argument('name', $args->{'name'});
${'name84_argument'}->checkNotNull();
if(!${'name84_argument'}->isValid()) return ${'name84_argument'}->getErrorMessage();
if(${'name84_argument'} !== null) ${'name84_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc85_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc85_argument'}->isValid()) return ${'desc85_argument'}->getErrorMessage();
} else
${'desc85_argument'} = NULL;if(${'desc85_argument'} !== null) ${'desc85_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url86_argument'} = new Argument('url', $args->{'url'});
if(!${'url86_argument'}->isValid()) return ${'url86_argument'}->getErrorMessage();
} else
${'url86_argument'} = NULL;if(${'url86_argument'} !== null) ${'url86_argument'}->setColumnType('varchar');

${'is_shortcut87_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut87_argument'}->ensureDefaultValue('N');
${'is_shortcut87_argument'}->checkNotNull();
if(!${'is_shortcut87_argument'}->isValid()) return ${'is_shortcut87_argument'}->getErrorMessage();
if(${'is_shortcut87_argument'} !== null) ${'is_shortcut87_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window88_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window88_argument'}->isValid()) return ${'open_window88_argument'}->getErrorMessage();
} else
${'open_window88_argument'} = NULL;if(${'open_window88_argument'} !== null) ${'open_window88_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand89_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand89_argument'}->isValid()) return ${'expand89_argument'}->getErrorMessage();
} else
${'expand89_argument'} = NULL;if(${'expand89_argument'} !== null) ${'expand89_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn90_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn90_argument'}->isValid()) return ${'normal_btn90_argument'}->getErrorMessage();
} else
${'normal_btn90_argument'} = NULL;if(${'normal_btn90_argument'} !== null) ${'normal_btn90_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn91_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn91_argument'}->isValid()) return ${'hover_btn91_argument'}->getErrorMessage();
} else
${'hover_btn91_argument'} = NULL;if(${'hover_btn91_argument'} !== null) ${'hover_btn91_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn92_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn92_argument'}->isValid()) return ${'active_btn92_argument'}->getErrorMessage();
} else
${'active_btn92_argument'} = NULL;if(${'active_btn92_argument'} !== null) ${'active_btn92_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls93_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls93_argument'}->isValid()) return ${'group_srls93_argument'}->getErrorMessage();
} else
${'group_srls93_argument'} = NULL;if(${'group_srls93_argument'} !== null) ${'group_srls93_argument'}->setColumnType('text');

${'listorder94_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder94_argument'}->checkNotNull();
if(!${'listorder94_argument'}->isValid()) return ${'listorder94_argument'}->getErrorMessage();
if(${'listorder94_argument'} !== null) ${'listorder94_argument'}->setColumnType('number');

${'regdate95_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate95_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate95_argument'}->isValid()) return ${'regdate95_argument'}->getErrorMessage();
if(${'regdate95_argument'} !== null) ${'regdate95_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl81_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl82_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl83_argument'})
,new InsertExpression('`name`', ${'name84_argument'})
,new InsertExpression('`desc`', ${'desc85_argument'})
,new InsertExpression('`url`', ${'url86_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut87_argument'})
,new InsertExpression('`open_window`', ${'open_window88_argument'})
,new InsertExpression('`expand`', ${'expand89_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn90_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn91_argument'})
,new InsertExpression('`active_btn`', ${'active_btn92_argument'})
,new InsertExpression('`group_srls`', ${'group_srls93_argument'})
,new InsertExpression('`listorder`', ${'listorder94_argument'})
,new InsertExpression('`regdate`', ${'regdate95_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>