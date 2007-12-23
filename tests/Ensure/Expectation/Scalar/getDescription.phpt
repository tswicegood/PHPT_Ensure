--TEST--
getDescription returns "value should be a scalar"
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$scalar = new PHPT_Ensure_Expectation_Scalar('foobar');
echo $scalar->getDescription(), "\n";

?>
===DONE===
--EXPECT--
value should be a scalar
===DONE===
