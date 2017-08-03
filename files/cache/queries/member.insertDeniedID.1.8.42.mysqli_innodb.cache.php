<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id54_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id54_argument'}->checkNotNull();
if(!${'user_id54_argument'}->isValid()) return ${'user_id54_argument'}->getErrorMessage();
if(${'user_id54_argument'} !== null) ${'user_id54_argument'}->setColumnType('varchar');

${'regdate55_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate55_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate55_argument'}->isValid()) return ${'regdate55_argument'}->getErrorMessage();
if(${'regdate55_argument'} !== null) ${'regdate55_argument'}->setColumnType('date');

${'description56_argument'} = new Argument('description', $args->{'description'});
${'description56_argument'}->ensureDefaultValue('');
if(!${'description56_argument'}->isValid()) return ${'description56_argument'}->getErrorMessage();
if(${'description56_argument'} !== null) ${'description56_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order57_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order57_argument'}->isValid()) return ${'list_order57_argument'}->getErrorMessage();
} else
${'list_order57_argument'} = NULL;if(${'list_order57_argument'} !== null) ${'list_order57_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id54_argument'})
,new InsertExpression('`regdate`', ${'regdate55_argument'})
,new InsertExpression('`description`', ${'description56_argument'})
,new InsertExpression('`list_order`', ${'list_order57_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>