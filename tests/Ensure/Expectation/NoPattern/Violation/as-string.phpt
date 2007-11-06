--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$violation = new PHPT_Ensure_Expectation_NoPattern_Violation($policy, '/^foo...$/');
echo $violation, "\n";

?>
===DONE===
--EXPECT--
pattern ['/^foo...$/'] was detected in ['foobar']
===DONE===
