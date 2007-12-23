<?php

class PHPT_Ensure_Expectation_LesserThanOrEqual extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value is expected to be lesser than or equal to %d';

    /**
     * @internal Note that this could have been implemented faster by using the built-in
     *           >= comparison operator.  The current method was chosen to show how existing
     *           Expectations can be used to build more complex Expectations.
     */
    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        static $expectations = array(
            'PHPT_Ensure_Expectation_LesserThan',
            'PHPT_Ensure_Expectation_Equals',
        );
        
        $passed = false;
        
        foreach ($expectations as $expectation_name) {
            $expectation = new $expectation_name($this->_expectation);
            $expectation->evaluate($policy);
            if ($expectation->getStatus()) {
                $passed = true;
                break;
            }
        }
        return $passed;
    }
}
