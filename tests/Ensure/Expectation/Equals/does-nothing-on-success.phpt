--TEST--
When evaluate() is called with a PHPT_Ensure_Policy that has a value equal to
this expectation, status will be true.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$random = 'Random Int: ' . rand(100, 200);
$policy = new PHPT_Ensure_Policy($random);
$expectation = new PHPT_Ensure_Expectation_Equals($random);
$expectation->evaluate($policy);

assert('$expectation->getStatus() == true');

?>
===DONE===
--EXPECT--
===DONE===
