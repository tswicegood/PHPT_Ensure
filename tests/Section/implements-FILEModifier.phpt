--TEST--
PHPT_Section_ENSURE implements PHPT_Section_FILEModifier
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$ensure = new PHPT_Section_ENSURE();
assert('$ensure instanceof PHPT_Section_FILEModifier');

?>
===DONE===
--EXPECT--
===DONE===
