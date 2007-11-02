<?php

class PHPT_Ensure_Expectation_Equals implements PHPT_Ensure_Expectation
{
    private $_expectation = null;
    
    public function __construct($data)
    {
        $this->_expectation = $data;
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        if ($policy->value == $this->_expectation) {
            return;
        }
        
        return new PHPT_Ensure_Expectation_Equals_Violation($policy, $this->_expectation);
    }
}