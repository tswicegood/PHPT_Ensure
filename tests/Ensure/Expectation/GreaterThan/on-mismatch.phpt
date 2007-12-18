--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$greaterThan = new PHPT_Ensure_Expectation_GreaterThan(100);
$policy = new PHPT_Ensure_Policy(100);
$greaterThan->evaluate($policy);
assert('$greaterThan->getStatus() === false');

?>
===DONE===
--EXPECT--
===DONE===
