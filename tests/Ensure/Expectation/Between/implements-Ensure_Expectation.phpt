--TEST--
PHPT_Ensure_Expectation_Between implements PHPT_Ensure_Expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$expectation = new PHPT_Ensure_Expectation_Between(100, 200);
assert('$expectation instanceof PHPT_Ensure_Expectation');

?>
===DONE===
--EXPECT--
===DONE===

