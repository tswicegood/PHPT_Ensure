--TEST--
Converts data provided into a string
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$int = rand(100, 200);
$message = new PHPT_Ensure_Message($int);
assert('(string)$message !== $int');
assert('(string)$message === (string)$int');

?>
===DONE===
--EXPECT--
===DONE===
