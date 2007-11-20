<?php

class PHPT_Ensure_Expectation_IsNot extends PHPT_Ensure_Expectation_Is
{
    protected $_message = 'value is not expected to be identical to %s';
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
