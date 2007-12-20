--TEST--
getStatus() === true on match
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$isTrue = new PHPT_Ensure_Expectation_IsNotFalse();
$isTrue->evaluate(new PHPT_Ensure_Policy(true));
assert('$isTrue->getStatus() === true');

?>
===DONE===
--EXPECT--
===DONE===

