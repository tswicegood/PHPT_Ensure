--TEST--
PHPT_Ensure_Expectation_NotLesserThanOrEqual implements PHPT_Ensure_Expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_NotLesserThanOrEqual(100);
assert('$expectation instanceof PHPT_Ensure_Expectation');

?>
===DONE===
--EXPECT--
===DONE===
