--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_LesserThan(100);
$policy = new PHPT_Ensure_Policy(99);
assert('is_null($pattern->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===
