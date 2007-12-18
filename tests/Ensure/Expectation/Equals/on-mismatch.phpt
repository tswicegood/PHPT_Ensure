--TEST--
When evaluate() is called with a PHPT_Ensure_Policy that has a value not equal to
this expectation, status will be falsee.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$expectation = new PHPT_Ensure_Expectation_Equals('barfoo');
$expectation->evaluate($policy);

assert('$expectation->getStatus() == false');
?>
===DONE===
--EXPECT--
===DONE===
