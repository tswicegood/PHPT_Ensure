--TEST--
PHPT_Ensure_Expectation_Equals implements PHPT_Ensure_Expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Equals('foobar');
assert('$expectation instanceof PHPT_Ensure_Expectation');

?>
===DONE===
--EXPECT--
===DONE===
