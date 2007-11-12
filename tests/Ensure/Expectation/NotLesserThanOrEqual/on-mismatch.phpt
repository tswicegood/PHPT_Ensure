--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotLesserThanOrEqual(100);
$policy = new PHPT_Ensure_Policy(100);
$expectation->evaluate($policy);
assert('$expectation->status === false');
unset($expectation);
unset($policy);

$expectation = new PHPT_Ensure_Expectation_NotLesserThanOrEqual(100);
$policy = new PHPT_Ensure_Policy(99);
$expectation->evaluate($policy);
assert('$expectation->status === false');
unset($expectation);
unset($policy);


?>
===DONE===
--EXPECT--
===DONE===
