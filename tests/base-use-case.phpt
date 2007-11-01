--TEST--
The sample use case of how PHPT_Ensure code should work
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

assert('class_exists("PHPT_Ensure", true)');

ensure('foobar')->equals('foobar');

?>
===DONE===
--EXPECT--
===DONE===
