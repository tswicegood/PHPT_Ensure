--TEST--
If the PHPT_Ensure_Policy->value matches the data that PHPT_Ensure_Expectation_Equals
was instantiated with, do nothing
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$random = 'Random Int: ' . rand(100, 200);
$policy = new PHPT_Ensure_Policy($random);
$expectation = new PHPT_Ensure_Expectation_Equals($random);
$expectation->evaluate($policy);

?>
===DONE===
--EXPECT--
===DONE===