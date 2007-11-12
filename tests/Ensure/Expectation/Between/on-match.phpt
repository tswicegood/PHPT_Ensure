--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Between(array(100, 200));
$policy = new PHPT_Ensure_Policy(rand(100, 200));
$expectation->evaluate($policy);
assert('$expectation->status == true');

?>
===DONE===
--EXPECT--
===DONE===

