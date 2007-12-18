<?php

class PHPT_Ensure_Expectation_NotLesserThanOrEqual extends PHPT_Ensure_Expectation_LesserThanOrEqual
{
    protected $_description = 'value is not expected to be lesser than or equal to %d';

    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
