--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotGreaterThan(100);
$policy = new PHPT_Ensure_Policy(101);
$expectation->evaluate($policy);
assert('$expectation->getStatus() === false');

?>
===DONE===
--EXPECT--
===DONE===
