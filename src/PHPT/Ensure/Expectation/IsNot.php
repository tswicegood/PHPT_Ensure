<?php

class PHPT_Ensure_Expectation_IsNot extends PHPT_Ensure_Expectation_Is
{
    protected $_description = 'value is not expected to be identical to %s';
    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_isValid($policy);
    }
}
