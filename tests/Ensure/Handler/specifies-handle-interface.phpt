--TEST--
PHPT_Ensure_Handler defines handle(PHPT_Ensure_Policy $policy)
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$reflection = new ReflectionClass('PHPT_Ensure_Handler');
assert('$reflection->hasMethod("handle")');

$method = $reflection->getMethod("handle");
assert('$method->getNumberOfParameters() == 1');

$param = array_shift($method->getParameters());
assert('$param->getName() == "policy"');
assert('$param->getClass()->getName() == "PHPT_Ensure_Policy"');

?>
===DONE===
--EXPECT--
===DONE===
