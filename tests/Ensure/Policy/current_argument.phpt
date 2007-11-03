--TEST--
When chaining method, current_argument will be set to whatever was passed in at the
last method.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$policy->foobar('barfoo');
assert('$policy->current_argument == "barfoo"');
$policy->foobar('one', 'two');
assert('$policy->current_argument == array("one", "two")');

?>
===DONE===
--EXPECTF--
PHPT_Ensure_Handler_Foobar%s
===DONE===
