--TEST--
PHPT_Ensure_Expectation_Identical::getDescription() should output:
    value is expected to be identical to %d
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Identical(rand(100, 200));
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to be identical to %d
===DONE===

