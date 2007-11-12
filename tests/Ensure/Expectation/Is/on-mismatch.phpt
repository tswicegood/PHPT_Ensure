--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$int = rand(100, 200);
$expectation = new PHPT_Ensure_Expectation_Is($int);
$policy = new PHPT_Ensure_Policy((string)$int);
$expectation->evaluate($policy);
assert('$expectation->status === false');

?>
===DONE===
--EXPECT--
===DONE===
