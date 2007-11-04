--TEST--
Return a PHPT_Ensure_Expectation_IsNot_Violation if the types are not identical
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$int = rand(100, 200);
$expectation = new PHPT_Ensure_Expectation_IsNot($int);
$policy = new PHPT_Ensure_Policy($int);
assert('$expectation->evaluate($policy) instanceof PHPT_Ensure_Expectation_IsNot_Violation');

?>
===DONE===
--EXPECT--
===DONE===
