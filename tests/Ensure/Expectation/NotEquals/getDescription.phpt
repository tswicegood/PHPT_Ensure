--TEST--
PHPT_Ensure_Expectation_NotEquals::getDescription() should output:
    value is not expected to be equal to %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotEquals(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is not expected to be equal to %d
===DONE===


