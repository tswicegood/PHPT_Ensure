--TEST--
Every call gets sent to a PHPT_Ensure_Handler
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foo');
$policy->foobar('foo');

?>
===DONE===
--EXPECT--
PHPT_Ensure_Handler_Foobar::handle was called with PHPT_Ensure_Policy and foo
===DONE===
