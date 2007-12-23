<?php

class PHPT_Ensure_Expectation_NoPattern extends PHPT_Ensure_Expectation_Pattern
{
    protected $_description = 'value is not expected to match pattern %s';

    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_isValid($policy);
    }
}
