<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleViolation
{
    protected $_message = '';
    
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_message = new PHPT_Ensure_Message(sprintf(
            $this->_message,
            var_export($policy->value, true),
            var_export($expected, true)
        ));
    }
    
    public function __toString()
    {
        return (string)$this->_message;
    }
}
