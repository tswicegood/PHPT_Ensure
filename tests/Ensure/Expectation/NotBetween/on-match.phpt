--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotBetween(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(1, 99));
$expectation->evaluate($policy);
assert('$expectation->getStatus() === true');

$expectation = new PHPT_Ensure_Expectation_NotBetween(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(201, 300));
$expectation->evaluate($policy);
assert('$expectation->getStatus() === true');

?>
===DONE===
--EXPECT--
===DONE===

