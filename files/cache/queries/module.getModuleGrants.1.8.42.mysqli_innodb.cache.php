<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleGrants");
$query->setAction("select");
$query->setPriority("");

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');

${'sort_index11_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index11_argument'}->ensureDefaultValue('group_srl');
if(!${'sort_index11_argument'}->isValid()) return ${'sort_index11_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index11_argument'}, "asc")
));
$query->setLimit();
return $query; ?>