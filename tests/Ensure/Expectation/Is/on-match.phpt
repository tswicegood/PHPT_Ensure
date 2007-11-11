--TEST--
On evaluate() match, do nothing
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$int = rand(100, 200);
$expectation = new PHPT_Ensure_Expectation_Is($int);
$policy = new PHPT_Ensure_Policy($int);
assert('is_null($expectation->evaluate($policy))');

?>
===DONE===
--EXPECT--
===DONE===
