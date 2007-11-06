--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy(rand(1, 99));
$violation = new PHPT_Ensure_Expectation_NotLesserThan_Violation($policy, 100);
echo $violation, "\n";

?>
===DONE===
--EXPECTF--
value [%d] was lesser than [100]
===DONE===
