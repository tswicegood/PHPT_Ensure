--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NotBetween_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$between = new PHPT_Ensure_Expectation_NotBetween(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(100, 200));
assert('$between->evaluate($policy) instanceof PHPT_Ensure_Expectation_NotBetween_Violation');

?>
===DONE===
--EXPECT--
===DONE===

