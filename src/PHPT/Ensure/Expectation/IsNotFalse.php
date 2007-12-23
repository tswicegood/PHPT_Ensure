<?php

class PHPT_Ensure_Expectation_IsNotFalse extends PHPT_Ensure_Expectation_IsFalse
{
    protected $_message = 'value is expected to be not false';
    
    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_isValid($policy);
    }
}
