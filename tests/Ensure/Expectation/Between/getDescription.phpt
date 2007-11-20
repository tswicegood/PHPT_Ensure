--TEST--
PHPT_Ensure_Expectation_Between::getDescription() should output:
    value is expected to be between %d and %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Between(array(rand(100, 200), rand(200, 300)));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to be between %d and %d
===DONE===
