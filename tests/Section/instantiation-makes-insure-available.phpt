--TEST--
If PHPT_Section_ENSURE is available, ensure() function is available.
--FILE--
<?php

require_once dirname(__FILE__) .'/_setup.inc';

assert('function_exists("ensure") === false');

$section = new PHPT_Section_ENSURE('');

assert('function_exists("ensure") === true');

?>
===DONE===
--EXPECT--
===DONE===