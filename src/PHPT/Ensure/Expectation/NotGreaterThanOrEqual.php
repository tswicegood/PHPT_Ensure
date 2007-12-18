<?php

class PHPT_Ensure_Expectation_NotGreaterThanOrEqual extends PHPT_Ensure_Expectation_GreaterThanOrEqual
{
    protected $_description = 'value is not expected to be greater than or equal to %d';

    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
