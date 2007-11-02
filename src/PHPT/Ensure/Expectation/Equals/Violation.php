<?php

class PHPT_Ensure_Expectation_Equals_Violation extends PHPT_Ensure_Message
{
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_message = sprintf(
            "values [%s] and [%s] are not equal",
            var_export($policy->value, true),
            var_export($expected, true)
        );
    }
}
