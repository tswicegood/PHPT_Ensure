--TEST--
PHPT_Ensure_Expectation::__construct($value);
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$interface = new ReflectionClass('PHPT_Ensure_Expectation');
assert('$interface->hasMethod("__construct")');

$method = $interface->getMethod('__construct');
assert('$method->getNumberOfParameters() == 1');

$param = array_shift($method->getParameters());
assert('$param->getName() == "value"');
assert('$param->isOptional() === false');

?>
===DONE===
--EXPECT--
===DONE===
