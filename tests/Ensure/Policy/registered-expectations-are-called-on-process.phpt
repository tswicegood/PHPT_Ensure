--TEST--
Any PHPT_Ensure_Expectation objects that have been registered will be called in the
order they were registered when process is called
--ARGS--
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$policy->registerExpectation(new PHPT_SimpleExpectation(''));
$policy->registerExpectation(new PHPT_SimpleExpectation(''));

$policy->process();

?>
===DONE===
--EXPECT--
PHPT_SimpleExpectation::evaluate was called 1
PHPT_SimpleExpectation::evaluate was called 2
===DONE===
