<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title108_argument'} = new Argument('title', $args->{'title'});
if(!${'title108_argument'}->isValid()) return ${'title108_argument'}->getErrorMessage();
} else
${'title108_argument'} = NULL;if(${'title108_argument'} !== null) ${'title108_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars109_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars109_argument'}->isValid()) return ${'extra_vars109_argument'}->getErrorMessage();
} else
${'extra_vars109_argument'} = NULL;if(${'extra_vars109_argument'} !== null) ${'extra_vars109_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout110_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout110_argument'}->isValid()) return ${'layout110_argument'}->getErrorMessage();
} else
${'layout110_argument'} = NULL;if(${'layout110_argument'} !== null) ${'layout110_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path111_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path111_argument'}->isValid()) return ${'layout_path111_argument'}->getErrorMessage();
} else
${'layout_path111_argument'} = NULL;if(${'layout_path111_argument'} !== null) ${'layout_path111_argument'}->setColumnType('varchar');

${'layout_srl112_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl112_argument'}->checkFilter('number');
${'layout_srl112_argument'}->checkNotNull();
${'layout_srl112_argument'}->createConditionValue();
if(!${'layout_srl112_argument'}->isValid()) return ${'layout_srl112_argument'}->getErrorMessage();
if(${'layout_srl112_argument'} !== null) ${'layout_srl112_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title108_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars109_argument'})
,new UpdateExpression('`layout`', ${'layout110_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path111_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl112_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>