<?php

class PHPT_Ensure_Expectation_LesserThanOrEqual extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    /**
     * @internal Note that this could have been implemented faster by using the built-in
     *           >= comparison operator.  The current method was chosen to show how existing
     *           Expectations can be used to build more complex Expectations.
     */
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        static $expectations = array(
            'PHPT_Ensure_Expectation_LesserThan',
            'PHPT_Ensure_Expectation_Equals',
        );
        
        $passed = false;
        
        foreach ($expectations as $expectation_name) {
            $expectation = new $expectation_name($this->_expectation);
            $expectation->evaluate($policy);
            if ($expectation->status) {
                $passed = true;
                break;
            }
        }
        return $passed;
    }
}
