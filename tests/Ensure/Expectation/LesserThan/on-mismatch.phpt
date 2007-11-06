--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_LesserThan_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$LesserThan = new PHPT_Ensure_Expectation_LesserThan(100);
$policy = new PHPT_Ensure_Policy(100);
assert('$LesserThan->evaluate($policy) instanceof PHPT_Ensure_Expectation_LesserThan_Violation');

?>
===DONE===
--EXPECT--
===DONE===