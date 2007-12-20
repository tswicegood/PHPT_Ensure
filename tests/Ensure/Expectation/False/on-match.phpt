--TEST--
getStatus() === true on match
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$isNotTrue = new PHPT_Ensure_Expectation_False();
$isNotTrue->evaluate(new PHPT_Ensure_Policy(false));
assert('$isNotTrue->getStatus() === true');

?>
===DONE===
--EXPECT--
===DONE===

