--TEST--
ensure() method returns a PHPT_Ensure_Policy
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

// instantiation of PHPT_Section_ENSURE is the trigger to make sure that ensure() is loaded
$section = new PHPT_Section_ENSURE('');

$policy = ensure('foo');
assert('$policy instanceof PHPT_Ensure_Policy');

?>
===DONE===
--EXPECT--
===DONE===
