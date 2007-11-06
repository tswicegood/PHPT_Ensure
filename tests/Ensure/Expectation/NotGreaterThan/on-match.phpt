--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_NotGreaterThan(100);
$policy = new PHPT_Ensure_Policy(100);
assert('is_null($pattern->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===