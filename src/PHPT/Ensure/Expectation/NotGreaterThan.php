<?php

class PHPT_Ensure_Expectation_NotGreaterThan extends PHPT_Ensure_Expectation_GreaterThan
{
    protected $_description = 'value is not expected to be greater than %d';

    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
