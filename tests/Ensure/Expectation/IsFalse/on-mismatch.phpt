--TEST--
getStatus() === false on mismatch
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$isTrue = new PHPT_Ensure_Expectation_IsFalse();
$isTrue->evaluate(new PHPT_Ensure_Policy(true));
assert('$isTrue->getStatus() === false');

?>
===DONE===
--EXPECT--
===DONE===

