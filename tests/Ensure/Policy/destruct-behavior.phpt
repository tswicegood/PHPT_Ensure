--TEST--
When a Policy object is destroyed, it calls process()
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$policy->registerExpectation(new PHPT_SimpleExpectation());
$policy->registerExpectation(new PHPT_SimpleExpectation());

unset($policy);

?>
===DONE===
--EXPECTREGEX--
PHPT_SimpleExpectation::evaluate was called 1
PHPT_SimpleExpectation::evaluate was called 2
.*
===DONE===
