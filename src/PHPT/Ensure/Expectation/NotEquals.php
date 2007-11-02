<?php

class PHPT_Ensure_Expectation_NotEquals implements PHPT_Ensure_Expectation
{
    public function __construct($data)
    {
        $this->_expectation = $data;
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        if ($policy->value != $this->_expectation) {
            return;
        }
        
        return new PHPT_Ensure_Expectation_NotEquals_Violation($policy, $this->_expectation);
    }
}
