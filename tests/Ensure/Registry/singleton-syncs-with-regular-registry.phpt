--TEST--
PHPT_Ensure_Registry::getInstance() object contains all values and modifications
of PHPT_Registry::getInstance()
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$ensure_registry = PHPT_Ensure_Registry::getInstance();
assert('!isset($ensure_registry->foo)');

$registry = PHPT_Registry::getInstance();
assert('!isset($registry->foo)');

$registry->foo = rand(1000, 2000);
assert('isset($registry->foo)');
assert('isset($ensure_registry->foo)');

assert('$registry->foo == $ensure_registry->foo');

// changes boil back up
$random = rand(3000, 4000);
$ensure_registry->foo = $random;
assert('$registry->foo == $random');

unset($ensure_registry->foo);
assert('!isset($registry->foo)');

?>
===DONE===
--EXPECT--
===DONE===

