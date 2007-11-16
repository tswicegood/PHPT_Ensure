--TEST--
PHPT_Ensure_Expectation_Equals::getDescription() provides a basic description
of what is expected by an equals expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Equals('foobar');
echo $expectation->getDescription(), "\n";

?>
===DONE===
--EXPECT--
value is expected to be equal to 'foobar'
===DONE===

