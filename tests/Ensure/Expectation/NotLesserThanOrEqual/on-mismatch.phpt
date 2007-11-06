--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NotLesserThanOrEqual_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotLesserThanOrEqual(100);
$policy = new PHPT_Ensure_Policy(100);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotLesserThanOrEqual_Violation');

$policy = new PHPT_Ensure_Policy(99);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotLesserThanOrEqual_Violation');

?>
===DONE===
--EXPECT--
===DONE===
