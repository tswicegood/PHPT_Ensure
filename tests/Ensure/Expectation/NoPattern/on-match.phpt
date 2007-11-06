--TEST--
evalutate() should do nothing on a success
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_NoPattern('/^\d{2}$/');
$policy = new PHPT_Ensure_Policy(rand(100, 999));
assert('is_null($pattern->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===