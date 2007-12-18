--TEST--
evaluate() returns PHPT_Ensure_Expectation_NotEquals_Violation if Policy->value is not equal
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$expectation = new PHPT_Ensure_Expectation_NotEquals('foobar');

$expectation->evaluate($policy);
assert('$expectation->getStatus() === false');

?>
===DONE===
--EXPECT--
===DONE===
