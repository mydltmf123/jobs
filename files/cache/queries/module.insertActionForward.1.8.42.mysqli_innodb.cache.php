<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act67_argument'} = new Argument('act', $args->{'act'});
${'act67_argument'}->checkNotNull();
if(!${'act67_argument'}->isValid()) return ${'act67_argument'}->getErrorMessage();
if(${'act67_argument'} !== null) ${'act67_argument'}->setColumnType('varchar');

${'module68_argument'} = new Argument('module', $args->{'module'});
${'module68_argument'}->checkNotNull();
if(!${'module68_argument'}->isValid()) return ${'module68_argument'}->getErrorMessage();
if(${'module68_argument'} !== null) ${'module68_argument'}->setColumnType('varchar');

${'type69_argument'} = new Argument('type', $args->{'type'});
${'type69_argument'}->checkNotNull();
if(!${'type69_argument'}->isValid()) return ${'type69_argument'}->getErrorMessage();
if(${'type69_argument'} !== null) ${'type69_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act67_argument'})
,new InsertExpression('`module`', ${'module68_argument'})
,new InsertExpression('`type`', ${'type69_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>