--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NotLesserThan_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$NotLesserThan = new PHPT_Ensure_Expectation_NotLesserThan(100);
$policy = new PHPT_Ensure_Policy(99);
assert('$NotLesserThan->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotLesserThan_Violation');

?>
===DONE===
--EXPECT--
===DONE===