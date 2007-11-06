--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_GreaterThan_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$GreaterThan = new PHPT_Ensure_Expectation_GreaterThan(100);
$policy = new PHPT_Ensure_Policy(100);
assert('$GreaterThan->evaluate($policy) instanceof PHPT_Ensure_Expectation_GreaterThan_Violation');

?>
===DONE===
--EXPECT--
===DONE===