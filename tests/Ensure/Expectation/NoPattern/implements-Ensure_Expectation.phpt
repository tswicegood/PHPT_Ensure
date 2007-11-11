--TEST--
PHPT_Ensure_Expectation_NoPattern implements PHPT_Ensure_Expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$NoPattern = new PHPT_Ensure_Expectation_NoPattern('/./');
assert('$NoPattern instanceof PHPT_Ensure_Expectation');

?>
===DONE===
--EXPECT--
===DONE===
