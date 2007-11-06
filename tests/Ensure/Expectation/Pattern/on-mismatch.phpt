--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_Pattern_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_Pattern('/^\d$/');
$policy = new PHPT_Ensure_Policy('Contains numbers 123 and strings "string"');
assert('$pattern->evaluate($policy) instanceof PHPT_Ensure_Expectation_Pattern_Violation');

?>
===DONE===
--EXPECT--
===DONE===