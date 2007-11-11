--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_GreaterThan_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_GreaterThanOrEqual(101);
$policy = new PHPT_Ensure_Policy(100);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_GreaterThanOrEqual_Violation');

?>
===DONE===
--EXPECT--
===DONE===
