--TEST--
PHPT_Ensure_Expectation_Pattern implements PHPT_Ensure_Expectation
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$pattern = new PHPT_Ensure_Expectation_Pattern('/./');
assert('$pattern instanceof PHPT_Ensure_Expectation');

?>
===DONE===
--EXPECT--
===DONE===