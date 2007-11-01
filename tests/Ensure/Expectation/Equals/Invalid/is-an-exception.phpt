--TEST--
PHPT_Ensure_Expectation_Equals_Invalid is usable as an extension
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$reflection = new ReflectionClass('PHPT_Ensure_Expectation_Equals_Invalid');
assert('$reflection->isSubClassOf("Exception")');

?>
===DONE===
--EXPECT--
===DONE===