--TEST--
PHPT_Ensure_Expectation_NoPattern::getDescription() should output:
    value is not expected to match pattern '/\d+/'
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NoPattern('/\d+/');
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is not expected to match pattern '/\\d+/'
===DONE===

