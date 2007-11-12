--TEST--
On an unsuccessful evaluate(), the status property will equal false
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NoPattern('/\d/');
$policy = new PHPT_Ensure_Policy('Contains numbers 123 and strings "string"');
$expectation->evaluate($policy);
assert('$expectation->status === false');

?>
===DONE===
--EXPECT--
===DONE===
