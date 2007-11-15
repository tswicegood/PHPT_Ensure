--TEST--
PHPT_Ensure_Registry is an instance of PHPT_Registry
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$registry = new PHPT_Ensure_Registry();
assert('$registry instanceof PHPT_Registry');

?>
===DONE===
--EXPECT--
===DONE===

