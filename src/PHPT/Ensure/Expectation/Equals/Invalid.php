<?php

class PHPT_Ensure_Expectation_Equals_Invalid extends Exception
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
            $this->_actual,
            $this->_expected
        );
    }
}