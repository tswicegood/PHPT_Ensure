--TEST--
If any exceptions are thrown while __destruct() has called finalize, it will catch
them and output them.
--ARGS--
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$policy->registerExpectation(new PHPT_SimpleExpectation());
$policy->registerExpectation(new PHPT_SimpleExpectation());

unset($policy);

?>
===DONE===
--EXPECTF--
PHPT_SimpleExpectation::evaluate%s
PHPT_SimpleExpectation::evaluate%s
PHPT_SimpleExpectation::__toString was called 1
PHPT_SimpleExpectation::__toString was called 2

===DONE===
