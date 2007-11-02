<?php

class PHPT_Ensure_Expectation_NotEquals_Violation
{
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_message = sprintf(
            "values [%s] and [%s] are equal",
            var_export($policy->value, true),
            var_export($expected, true)
        );
    }
    
    public function __toString()
    {
        return $this->_message;
    }
}