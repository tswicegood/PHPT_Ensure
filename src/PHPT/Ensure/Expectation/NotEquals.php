<?php

class PHPT_Ensure_Expectation_NotEquals extends PHPT_Ensure_Expectation_Equals
{
    protected $_description = 'value is not expected to be equal to %s';
    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_isValid($policy);
    }
}
