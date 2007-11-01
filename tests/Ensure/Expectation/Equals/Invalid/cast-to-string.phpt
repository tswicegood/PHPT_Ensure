--TEST--
When PHPT_Ensure_Expectation_Equals_Invalid is cast to a string, it provides a plain
English explaination of what happened
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$invalid = new PHPT_Ensure_Expectation_Equals_Invalid($policy, 'barfoo');

echo $invalid, "\n";
?>
===DONE===
--EXPECT--
values [foobar] and [barfoo] are not equal
===DONE===