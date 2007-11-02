--TEST--
PHPT_Ensure_Handler_Equals implements PHPT_Ensure_Handler
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$handler = new PHPT_Ensure_Handler_Equals();
assert('$handler instanceof PHPT_Ensure_Handler');

?>
===DONE===
--EXPECT--
===DONE===