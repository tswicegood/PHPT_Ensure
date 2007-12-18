--TEST--
Expectations can be called without any parameters
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_Ensure_Expectation_SimpleFooBar implements PHPT_Ensure_Expectation {
    public function __construct($value = null) {
        echo __METHOD__, " was called with ", var_export($value, true), "\n";
    }
    public function evaluate(PHPT_Ensure_Policy $policy) {
        echo __METHOD__, " was called\n";
    }
    public function getStatus() {
        echo __METHOD__, " was called\n";
        return true;
    }
    public function getExpectation() {
        echo __METHOD__, " was called\n";
        return 'foobar';
    }
    public function getDescription() {
        echo __METHOD__, " was called\n";
    }
}

$policy = new PHPT_Ensure_Policy('foobar');
$policy->simpleFooBar();
unset($policy);

?>
===DONE===
--EXPECT--
PHPT_Ensure_Expectation_SimpleFooBar::__construct was called with NULL
PHPT_Ensure_Expectation_SimpleFooBar::evaluate was called
PHPT_Ensure_Expectation_SimpleFooBar::getStatus was called
===DONE===

