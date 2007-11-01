--TEST--
If any exceptions are thrown while __destruct() has called finalize, it will catch
them and output them.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_SimpleExpectation
{
    public function evaluate(PHPT_Ensure_Policy $policy) {
        return $this;
    }
    public function __toString() {
        static $counter = 0;
        return __METHOD__ . " was called " . ++$counter . "\n";
    }
}

$policy = new PHPT_Ensure_Policy('foobar');
$policy->registerExpectation(new PHPT_SimpleExpectation());
$policy->registerExpectation(new PHPT_SimpleExpectation());

unset($policy);

?>
===DONE===
--EXPECT--
PHPT_SimpleExpectation::__toString was called 1
PHPT_SimpleExpectation::__toString was called 2

===DONE===
