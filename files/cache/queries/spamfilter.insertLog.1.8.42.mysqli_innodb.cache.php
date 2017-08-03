<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl115_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl115_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl115_argument'}->isValid()) return ${'spamfilter_log_srl115_argument'}->getErrorMessage();
if(${'spamfilter_log_srl115_argument'} !== null) ${'spamfilter_log_srl115_argument'}->setColumnType('number');

${'ipaddress116_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress116_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress116_argument'}->isValid()) return ${'ipaddress116_argument'}->getErrorMessage();
if(${'ipaddress116_argument'} !== null) ${'ipaddress116_argument'}->setColumnType('varchar');

${'regdate117_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate117_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate117_argument'}->isValid()) return ${'regdate117_argument'}->getErrorMessage();
if(${'regdate117_argument'} !== null) ${'regdate117_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl115_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress116_argument'})
,new InsertExpression('`regdate`', ${'regdate117_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>