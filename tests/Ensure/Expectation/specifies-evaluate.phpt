--TEST--
PHPT_Ensure_Expectation::evaluate(PHPT_Ensure_Policy $policy)
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$interface = new ReflectionClass('PHPT_Ensure_Expectation');
assert('$interface->hasMethod("evaluate")');

$method = $interface->getMethod('evaluate');
assert('$method->getNumberOfParameters() == 1');

$param = array_shift($method->getParameters());
assert('$param->getName() == "policy"');
assert('$param->getClass()->getName() == "PHPT_Ensure_Policy"');

?>
===DONE===
--EXPECT--
===DONE===
