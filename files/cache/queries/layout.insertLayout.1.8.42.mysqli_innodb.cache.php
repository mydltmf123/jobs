<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl99_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl99_argument'}->checkFilter('number');
${'layout_srl99_argument'}->checkNotNull();
if(!${'layout_srl99_argument'}->isValid()) return ${'layout_srl99_argument'}->getErrorMessage();
if(${'layout_srl99_argument'} !== null) ${'layout_srl99_argument'}->setColumnType('number');

${'site_srl100_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl100_argument'}->checkFilter('number');
${'site_srl100_argument'}->ensureDefaultValue('0');
${'site_srl100_argument'}->checkNotNull();
if(!${'site_srl100_argument'}->isValid()) return ${'site_srl100_argument'}->getErrorMessage();
if(${'site_srl100_argument'} !== null) ${'site_srl100_argument'}->setColumnType('number');

${'layout101_argument'} = new Argument('layout', $args->{'layout'});
${'layout101_argument'}->checkNotNull();
if(!${'layout101_argument'}->isValid()) return ${'layout101_argument'}->getErrorMessage();
if(${'layout101_argument'} !== null) ${'layout101_argument'}->setColumnType('varchar');

${'title102_argument'} = new Argument('title', $args->{'title'});
${'title102_argument'}->checkNotNull();
if(!${'title102_argument'}->isValid()) return ${'title102_argument'}->getErrorMessage();
if(${'title102_argument'} !== null) ${'title102_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl103_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl103_argument'}->isValid()) return ${'module_srl103_argument'}->getErrorMessage();
} else
${'module_srl103_argument'} = NULL;if(${'module_srl103_argument'} !== null) ${'module_srl103_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars104_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars104_argument'}->isValid()) return ${'extra_vars104_argument'}->getErrorMessage();
} else
${'extra_vars104_argument'} = NULL;if(${'extra_vars104_argument'} !== null) ${'extra_vars104_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path105_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path105_argument'}->isValid()) return ${'layout_path105_argument'}->getErrorMessage();
} else
${'layout_path105_argument'} = NULL;if(${'layout_path105_argument'} !== null) ${'layout_path105_argument'}->setColumnType('varchar');

${'regdate106_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate106_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate106_argument'}->isValid()) return ${'regdate106_argument'}->getErrorMessage();
if(${'regdate106_argument'} !== null) ${'regdate106_argument'}->setColumnType('date');

${'layout_type107_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type107_argument'}->ensureDefaultValue('P');
if(!${'layout_type107_argument'}->isValid()) return ${'layout_type107_argument'}->getErrorMessage();
if(${'layout_type107_argument'} !== null) ${'layout_type107_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl99_argument'})
,new InsertExpression('`site_srl`', ${'site_srl100_argument'})
,new InsertExpression('`layout`', ${'layout101_argument'})
,new InsertExpression('`title`', ${'title102_argument'})
,new InsertExpression('`module_srl`', ${'module_srl103_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars104_argument'})
,new InsertExpression('`layout_path`', ${'layout_path105_argument'})
,new InsertExpression('`regdate`', ${'regdate106_argument'})
,new InsertExpression('`layout_type`', ${'layout_type107_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>