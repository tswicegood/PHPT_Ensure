--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_Between_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$between = new PHPT_Ensure_Expectation_Between(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(1, 99));
$between->evaluate($policy);
assert('$between->status == false');

$between = new PHPT_Ensure_Expectation_Between(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(201, 300));
$between->evaluate($policy);
assert('$between->status == false');

?>
===DONE===
--EXPECT--
===DONE===

