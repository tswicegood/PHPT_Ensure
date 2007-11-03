--TEST--
PHPT_Ensure_Message provides simple means of outputting a string via an object
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$random = "Random Int: " . rand(100, 200);
$message = new PHPT_Ensure_Message($random);
assert('(string)$message == $random');

?>
===DONE===
--EXPECT--
===DONE===