<?php

class PHPT_Ensure_Expectation_NotLesserThan extends PHPT_Ensure_Expectation_LesserThan
{
    protected $_description = 'value is not expected to be lesser than %d';

    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_isValid($policy);
    }
}
