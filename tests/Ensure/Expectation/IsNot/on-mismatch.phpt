--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$int = rand(100, 200);
$expectation = new PHPT_Ensure_Expectation_IsNot($int);
$policy = new PHPT_Ensure_Policy($int);
$expectation->evaluate($policy);
assert('$expectation->getStatus() === false');

?>
===DONE===
--EXPECT--
===DONE===
