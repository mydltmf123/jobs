<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title51_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title51_argument'}->checkNotNull();
${'title51_argument'}->createConditionValue();
if(!${'title51_argument'}->isValid()) return ${'title51_argument'}->getErrorMessage();
if(${'title51_argument'} !== null) ${'title51_argument'}->setColumnType('varchar');

${'site_srl52_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl52_argument'}->ensureDefaultValue('0');
${'site_srl52_argument'}->createConditionValue();
if(!${'site_srl52_argument'}->isValid()) return ${'site_srl52_argument'}->getErrorMessage();
if(${'site_srl52_argument'} !== null) ${'site_srl52_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title51_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl52_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>