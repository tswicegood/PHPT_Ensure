--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NotGreaterThan_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$NotGreaterThan = new PHPT_Ensure_Expectation_NotGreaterThan(100);
$policy = new PHPT_Ensure_Policy(101);
assert('$NotGreaterThan->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotGreaterThan_Violation');

?>
===DONE===
--EXPECT--
===DONE===