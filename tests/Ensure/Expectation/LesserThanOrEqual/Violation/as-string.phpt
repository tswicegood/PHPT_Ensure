--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy(101);
$violation = new PHPT_Ensure_Expectation_LesserThanOrEqual_Violation($policy, 100);
echo $violation, "\n";

?>
===DONE===
--EXPECT--
value [101] was not lesser than or equal to [100]
===DONE===
