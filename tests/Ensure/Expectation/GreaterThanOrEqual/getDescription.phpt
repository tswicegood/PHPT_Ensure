--TEST--
PHPT_Ensure_Expectation_GreaterThanOrEqual::getDescription() should output:
    value is expected to be greater than or equal to %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_GreaterThanOrEqual(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to be greater than or equal to %d
===DONE===

