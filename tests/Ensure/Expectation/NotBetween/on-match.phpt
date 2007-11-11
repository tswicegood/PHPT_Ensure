--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotBetween(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(1, 99));
assert('is_null($expectation->evaluate($policy))');

$expectation = new PHPT_Ensure_Expectation_NotBetween(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(201, 300));
assert('is_null($expectation->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===

