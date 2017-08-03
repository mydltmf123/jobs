<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid77_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid77_argument'}->createConditionValue();
if(!${'mid77_argument'}->isValid()) return ${'mid77_argument'}->getErrorMessage();
} else
${'mid77_argument'} = NULL;if(${'mid77_argument'} !== null) ${'mid77_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl78_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl78_argument'}->createConditionValue();
if(!${'module_srl78_argument'}->isValid()) return ${'module_srl78_argument'}->getErrorMessage();
} else
${'module_srl78_argument'} = NULL;if(${'module_srl78_argument'} !== null) ${'module_srl78_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl79_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl79_argument'}->createConditionValue();
if(!${'site_srl79_argument'}->isValid()) return ${'site_srl79_argument'}->getErrorMessage();
} else
${'site_srl79_argument'} = NULL;if(${'site_srl79_argument'} !== null) ${'site_srl79_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid77_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl78_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl79_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>