--TEST--
PHPT_Ensure_Expectation_GreaterThan::getDescription() should output:
    value is expected to be greater than %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_GreaterThan(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to be greater than %d
===DONE===

