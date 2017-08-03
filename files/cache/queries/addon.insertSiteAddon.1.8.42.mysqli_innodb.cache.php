<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl58_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl58_argument'}->checkNotNull();
if(!${'site_srl58_argument'}->isValid()) return ${'site_srl58_argument'}->getErrorMessage();
if(${'site_srl58_argument'} !== null) ${'site_srl58_argument'}->setColumnType('number');

${'addon59_argument'} = new Argument('addon', $args->{'addon'});
${'addon59_argument'}->checkNotNull();
if(!${'addon59_argument'}->isValid()) return ${'addon59_argument'}->getErrorMessage();
if(${'addon59_argument'} !== null) ${'addon59_argument'}->setColumnType('varchar');

${'is_used60_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used60_argument'}->ensureDefaultValue('N');
${'is_used60_argument'}->checkNotNull();
if(!${'is_used60_argument'}->isValid()) return ${'is_used60_argument'}->getErrorMessage();
if(${'is_used60_argument'} !== null) ${'is_used60_argument'}->setColumnType('char');

${'is_used_m61_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m61_argument'}->ensureDefaultValue('N');
if(!${'is_used_m61_argument'}->isValid()) return ${'is_used_m61_argument'}->getErrorMessage();
if(${'is_used_m61_argument'} !== null) ${'is_used_m61_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars62_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars62_argument'}->isValid()) return ${'extra_vars62_argument'}->getErrorMessage();
} else
${'extra_vars62_argument'} = NULL;if(${'extra_vars62_argument'} !== null) ${'extra_vars62_argument'}->setColumnType('text');

${'regdate63_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate63_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate63_argument'}->isValid()) return ${'regdate63_argument'}->getErrorMessage();
if(${'regdate63_argument'} !== null) ${'regdate63_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl58_argument'})
,new InsertExpression('`addon`', ${'addon59_argument'})
,new InsertExpression('`is_used`', ${'is_used60_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m61_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars62_argument'})
,new InsertExpression('`regdate`', ${'regdate63_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>