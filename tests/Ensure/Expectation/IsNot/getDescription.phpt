--TEST--
PHPT_Ensure_Expectation_IsNot::getDescription() should output:
    value is not expected to be between %d and %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_IsNot(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is not expected to be identical to %d
===DONE===

