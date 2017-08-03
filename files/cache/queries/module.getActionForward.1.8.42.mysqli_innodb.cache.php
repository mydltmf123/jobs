<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act53_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act53_argument'}->createConditionValue();
if(!${'act53_argument'}->isValid()) return ${'act53_argument'}->getErrorMessage();
} else
${'act53_argument'} = NULL;if(${'act53_argument'} !== null) ${'act53_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act53_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>