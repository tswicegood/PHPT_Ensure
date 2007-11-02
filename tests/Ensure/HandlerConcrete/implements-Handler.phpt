--TEST--
PHPT_Ensure_HandlerConcrete implements PHPT_Ensure_Handler
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$concrete = new PHPT_Ensure_HandlerConcrete('equals');
assert('$concrete instanceof PHPT_Ensure_Handler');

?>
===DONE===
--EXPECT--
===DONE===