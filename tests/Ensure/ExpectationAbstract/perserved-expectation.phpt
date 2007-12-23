--TEST--
If a _expectation in the subclass and null is provided to the constructor,
the original expectation will be perserved
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_Ensure_Expectation_SomeRandomExpectation extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_expectation = 'foobar';
    protected function _isValid(PHPT_Ensure_Policy $policy) { }
}

$expectation = new PHPT_Ensure_Expectation_SomeRandomExpectation();
assert('$expectation->getExpectation() == "foobar"');

?>
===DONE===
--EXPECT--
===DONE===

