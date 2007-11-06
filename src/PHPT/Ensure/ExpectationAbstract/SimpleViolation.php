<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleViolation
{
    protected $_message = '';
    
    public function __construct(PHPT_Ensure_Policy $policy, $expected)
    {
        $this->_message = new PHPT_Ensure_Message(sprintf(
            $this->_message,
            $this->_dumpPolicy($policy),
            $this->_dumpExpectation($expected)
        ));
    }
    
    protected function _dumpPolicy(PHPT_Ensure_Policy $policy)
    {
        return var_export($policy->value, true);
    }
    
    protected function _dumpExpectation($expectation)
    {
        return var_export($expectation, true);
    }
    
    public function __toString()
    {
        return (string)$this->_message;
    }
}
