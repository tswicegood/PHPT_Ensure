--TEST--
PHPT_Ensure_Expectation_LesserThanOrEqual::getDescription() should output:
    value is expected to be lesser than or equal to %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_LesserThanOrEqual(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to be lesser than or equal to %d
===DONE===

