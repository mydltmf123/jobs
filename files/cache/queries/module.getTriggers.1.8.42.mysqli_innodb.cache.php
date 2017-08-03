<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name16_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name16_argument'}->createConditionValue();
if(!${'trigger_name16_argument'}->isValid()) return ${'trigger_name16_argument'}->getErrorMessage();
} else
${'trigger_name16_argument'} = NULL;if(${'trigger_name16_argument'} !== null) ${'trigger_name16_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position17_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position17_argument'}->createConditionValue();
if(!${'called_position17_argument'}->isValid()) return ${'called_position17_argument'}->getErrorMessage();
} else
${'called_position17_argument'} = NULL;if(${'called_position17_argument'} !== null) ${'called_position17_argument'}->setColumnType('varchar');

${'22_argument'} = new Argument('', $args->{''});
${'22_argument'}->ensureDefaultValue('called_method');
if(!${'22_argument'}->isValid()) return ${'22_argument'}->getErrorMessage();

${'21_argument'} = new Argument('', $args->{''});
${'21_argument'}->ensureDefaultValue('type');
if(!${'21_argument'}->isValid()) return ${'21_argument'}->getErrorMessage();

${'20_argument'} = new Argument('', $args->{''});
${'20_argument'}->ensureDefaultValue('module');
if(!${'20_argument'}->isValid()) return ${'20_argument'}->getErrorMessage();

${'19_argument'} = new Argument('', $args->{''});
${'19_argument'}->ensureDefaultValue('called_position');
if(!${'19_argument'}->isValid()) return ${'19_argument'}->getErrorMessage();

${'18_argument'} = new Argument('', $args->{''});
${'18_argument'}->ensureDefaultValue('trigger_name');
if(!${'18_argument'}->isValid()) return ${'18_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name16_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position17_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'18_argument'}, "asc")
,new OrderByColumn(${'19_argument'}, "asc")
,new OrderByColumn(${'20_argument'}, "asc")
,new OrderByColumn(${'21_argument'}, "asc")
,new OrderByColumn(${'22_argument'}, "asc")
));
$query->setLimit();
return $query; ?>