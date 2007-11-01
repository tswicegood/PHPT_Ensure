--TEST--
evaluate() throws an exception if Policy->value is not equal
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$expectation = new PHPT_Ensure_Expectation_Equals('barfoo');

$result = $expectation->evaluate($policy);
assert('$result instanceof PHPT_Ensure_Expectation_Equals_Violation');

?>
===DONE===
--EXPECT--
===DONE===
