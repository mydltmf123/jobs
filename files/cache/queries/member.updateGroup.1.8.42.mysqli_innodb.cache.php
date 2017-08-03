<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateGroup");
$query->setAction("update");
$query->setPriority("");

${'title2_argument'} = new Argument('title', $args->{'title'});
${'title2_argument'}->checkNotNull();
if(!${'title2_argument'}->isValid()) return ${'title2_argument'}->getErrorMessage();
if(${'title2_argument'} !== null) ${'title2_argument'}->setColumnType('varchar');

${'is_default3_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default3_argument'}->ensureDefaultValue('N');
${'is_default3_argument'}->checkNotNull();
if(!${'is_default3_argument'}->isValid()) return ${'is_default3_argument'}->getErrorMessage();
if(${'is_default3_argument'} !== null) ${'is_default3_argument'}->setColumnType('char');

${'description4_argument'} = new Argument('description', $args->{'description'});
${'description4_argument'}->ensureDefaultValue('');
if(!${'description4_argument'}->isValid()) return ${'description4_argument'}->getErrorMessage();
if(${'description4_argument'} !== null) ${'description4_argument'}->setColumnType('text');

${'image_mark5_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark5_argument'}->ensureDefaultValue('');
if(!${'image_mark5_argument'}->isValid()) return ${'image_mark5_argument'}->getErrorMessage();
if(${'image_mark5_argument'} !== null) ${'image_mark5_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order6_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order6_argument'}->isValid()) return ${'list_order6_argument'}->getErrorMessage();
} else
${'list_order6_argument'} = NULL;if(${'list_order6_argument'} !== null) ${'list_order6_argument'}->setColumnType('number');

${'group_srl7_argument'} = new ConditionArgument('group_srl', $args->group_srl, 'equal');
${'group_srl7_argument'}->checkFilter('number');
${'group_srl7_argument'}->checkNotNull();
${'group_srl7_argument'}->createConditionValue();
if(!${'group_srl7_argument'}->isValid()) return ${'group_srl7_argument'}->getErrorMessage();
if(${'group_srl7_argument'} !== null) ${'group_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title2_argument'})
,new UpdateExpression('`is_default`', ${'is_default3_argument'})
,new UpdateExpression('`description`', ${'description4_argument'})
,new UpdateExpression('`image_mark`', ${'image_mark5_argument'})
,new UpdateExpression('`list_order`', ${'list_order6_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`group_srl`',$group_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>