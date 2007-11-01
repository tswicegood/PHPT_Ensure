--TEST--
PHPT_Ensure_Handler is an interface
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

assert('interface_exists("PHPT_Ensure_Handler", true)');

?>
===DONE===
--EXPECT--
===DONE===
