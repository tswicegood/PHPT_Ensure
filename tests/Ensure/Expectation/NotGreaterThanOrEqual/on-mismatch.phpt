--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NotGreaterThanOrEqual_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotGreaterThanOrEqual(100);
$policy = new PHPT_Ensure_Policy(100);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotGreaterThanOrEqual_Violation');

$policy = new PHPT_Ensure_Policy(101);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotGreaterThanOrEqual_Violation');

?>
===DONE===
--EXPECT--
===DONE===