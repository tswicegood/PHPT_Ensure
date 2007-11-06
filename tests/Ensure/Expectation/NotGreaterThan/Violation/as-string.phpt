--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy(rand(101, 200));
$violation = new PHPT_Ensure_Expectation_NotGreaterThan_Violation($policy, 100);
echo $violation, "\n";

?>
===DONE===
--EXPECTF--
value [%d] was greater than [100]
===DONE===
