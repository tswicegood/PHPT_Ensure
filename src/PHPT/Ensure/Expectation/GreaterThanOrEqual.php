<?php

class PHPT_Ensure_Expectation_GreaterThanOrEqual extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_message = 'value is expected to be greater than or equal to %d';

    /**
     * @internal Note that this could have been implemented faster by using the built-in
     *           >= comparison operator.  The current method was chosen to show how existing
     *           Expectations can be used to build more complex Expectations.
     */
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        static $expectations = array(
            'PHPT_Ensure_Expectation_GreaterThan',
            'PHPT_Ensure_Expectation_Equals',
        );
        
        $passed = false;
        
        foreach ($expectations as $expectation_name) {
            $expectation = new $expectation_name($this->_expectation);
            $expectation->evaluate($policy);
            if ($expectation->getStatus() === true) {
                $passed = true;
                break;
            }
        }
        return $passed;
    }
}
