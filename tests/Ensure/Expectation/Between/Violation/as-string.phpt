--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy(rand(1, 99));
$violation = new PHPT_Ensure_Expectation_Between_Violation($policy, array(100, 200));
echo $violation, "\n";

?>
===DONE===
--EXPECTF--
value [%d] was not between [100] and [200]
===DONE===
