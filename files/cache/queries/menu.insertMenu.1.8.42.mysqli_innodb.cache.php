<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl70_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl70_argument'}->checkFilter('number');
${'menu_srl70_argument'}->checkNotNull();
if(!${'menu_srl70_argument'}->isValid()) return ${'menu_srl70_argument'}->getErrorMessage();
if(${'menu_srl70_argument'} !== null) ${'menu_srl70_argument'}->setColumnType('number');

${'site_srl71_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl71_argument'}->checkFilter('number');
${'site_srl71_argument'}->ensureDefaultValue('0');
${'site_srl71_argument'}->checkNotNull();
if(!${'site_srl71_argument'}->isValid()) return ${'site_srl71_argument'}->getErrorMessage();
if(${'site_srl71_argument'} !== null) ${'site_srl71_argument'}->setColumnType('number');

${'title72_argument'} = new Argument('title', $args->{'title'});
${'title72_argument'}->checkNotNull();
if(!${'title72_argument'}->isValid()) return ${'title72_argument'}->getErrorMessage();
if(${'title72_argument'} !== null) ${'title72_argument'}->setColumnType('varchar');

${'listorder73_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder73_argument'}->checkNotNull();
if(!${'listorder73_argument'}->isValid()) return ${'listorder73_argument'}->getErrorMessage();
if(${'listorder73_argument'} !== null) ${'listorder73_argument'}->setColumnType('number');

${'regdate74_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate74_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate74_argument'}->isValid()) return ${'regdate74_argument'}->getErrorMessage();
if(${'regdate74_argument'} !== null) ${'regdate74_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl70_argument'})
,new InsertExpression('`site_srl`', ${'site_srl71_argument'})
,new InsertExpression('`title`', ${'title72_argument'})
,new InsertExpression('`listorder`', ${'listorder73_argument'})
,new InsertExpression('`regdate`', ${'regdate74_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>