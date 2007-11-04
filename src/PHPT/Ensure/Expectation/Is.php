<?php

class PHPT_Ensure_Expectation_Is implements PHPT_Ensure_Expectation
{
    private $_expected = null;
    
    public function __construct($data)
    {
        $this->_expected = $data;
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        if ($policy->value === $this->_expected) {
            return;
        }
        
        return new PHPT_Ensure_Expectation_Is_Violation($policy, $this->_expected);
    }
}
