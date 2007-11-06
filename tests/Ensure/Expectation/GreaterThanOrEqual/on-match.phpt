--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_GreaterThanOrEqual(100);
$policy = new PHPT_Ensure_Policy(100);
assert('is_null($expectation->evaluate($policy))');

$policy = new PHPT_Ensure_Policy(101);
assert('is_null($expectation->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===