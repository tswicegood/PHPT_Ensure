--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy(99);
$violation = new PHPT_Ensure_Expectation_GreaterThanOrEqual_Violation($policy, 100);
echo $violation, "\n";

?>
===DONE===
--EXPECT--
value [99] was not greater than or equal to [100]
===DONE===
