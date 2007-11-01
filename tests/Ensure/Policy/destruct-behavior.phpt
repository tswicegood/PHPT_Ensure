--TEST--
When a Policy object is destroyed, it calls finalize()
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_SimpleExpectation
{
    public function evaluate(PHPT_Ensure_Policy $policy) {
        static $counter = 0;
        echo __METHOD__, " was called ", ++$counter , "\n";
    }
}

$policy = new PHPT_Ensure_Policy('foobar');
$policy->registerExpectation(new PHPT_SimpleExpectation());
$policy->registerExpectation(new PHPT_SimpleExpectation());

unset($policy);

?>
===DONE===
--EXPECT--
PHPT_SimpleExpectation::evaluate was called 1
PHPT_SimpleExpectation::evaluate was called 2
===DONE===
