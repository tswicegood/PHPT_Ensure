<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleViolation extends PHPT_Ensure_Message
{
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_message = sprintf(
            $this->_message,
            var_export($policy->value, true),
            var_export($expected, true)
        );
    }
}
