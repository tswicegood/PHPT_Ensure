--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$violation = new PHPT_Ensure_Expectation_Pattern_Violation($policy, '/\d+/');
echo $violation, "\n";

?>
===DONE===
--EXPECT--
pattern ['/\d+/'] was not detected in ['foobar']
===DONE===
