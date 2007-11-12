--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_Pattern('/^\d$/');
$policy = new PHPT_Ensure_Policy('Contains numbers 123 and strings "string"');
$pattern->evaluate($policy);
assert('$pattern->status === false');

?>
===DONE===
--EXPECT--
===DONE===
