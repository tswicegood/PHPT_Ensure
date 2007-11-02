--TEST--
When PHPT_Ensure_Expectation_NotEquals_Violation is cast to a string, it provides a plain
English explaination of what happened
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$invalid = new PHPT_Ensure_Expectation_NotEquals_Violation($policy, 'foobar');

echo $invalid, "\n";

?>
===DONE===
--EXPECT--
values ['foobar'] and ['foobar'] are equal
===DONE===
