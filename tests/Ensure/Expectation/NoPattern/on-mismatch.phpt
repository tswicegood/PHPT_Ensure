--TEST--
On a mismatch, evaluate() returns PHPT_Ensure_Expectation_NoPattern_Violation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$NoPattern = new PHPT_Ensure_Expectation_NoPattern('/\d/');
$policy = new PHPT_Ensure_Policy('Contains numbers 123 and strings "string"');
assert('$NoPattern->evaluate($policy) instanceof PHPT_Ensure_Expectation_NoPattern_Violation');

?>
===DONE===
--EXPECT--
===DONE===
