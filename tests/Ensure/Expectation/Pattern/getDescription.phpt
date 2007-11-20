--TEST--
PHPT_Ensure_Expectation_Pattern::getDescription() should output:
    value is expected to match pattern '/\d+/'
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Pattern('/\d+/');
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECTF--
value is expected to match pattern '/\\d+/'
===DONE===


