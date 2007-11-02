--TEST--
When handle() is called, it calls registerExpectation on the $policy provided
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$handler = new PHPT_Ensure_Handler_Equals();
$handler->handle(new PHPT_SimplePolicy());
?>
===DONE===
--EXPECT--
PHPT_SimplePolicy::registerExpectation was called
===DONE===