--TEST--
evaluate() returns PHPT_Ensure_Expectation_NotEquals_Violation if Policy->value is not equal
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$expectation = new PHPT_Ensure_Expectation_NotEquals('foobar');

$result = $expectation->evaluate($policy);
assert('$result instanceof PHPT_Ensure_Expectation_NotEquals_Violation');

?>
===DONE===
--EXPECT--
===DONE===
