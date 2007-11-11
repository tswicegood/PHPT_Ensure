<?php

class PHPT_Ensure_Expectation_NotGreaterThanOrEqual extends PHPT_Ensure_Expectation_GreaterThanOrEqual
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
