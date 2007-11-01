<?php

class PHPT_Ensure_Expectation_Equals_Violation 
{
    private $_actual = null;
    private $_expected = null;
    
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_actual = $policy->value;
        $this->_expected = $expected;
    }
    
    public function __toString()
    {
        return sprintf(
            "values [%s] and [%s] are not equal",
            var_export($this->_actual, true),
            var_export($this->_expected, true)
        );
    }
}
