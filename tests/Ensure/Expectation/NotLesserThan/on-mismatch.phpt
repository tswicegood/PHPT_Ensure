--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotLesserThan(100);
$policy = new PHPT_Ensure_Policy(99);
$expectation->evaluate($policy);
assert('$expectation->status === false');

?>
===DONE===
--EXPECT--
===DONE===
