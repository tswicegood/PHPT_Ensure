<?php

class PHPT_Ensure_Expectation_NotLesserThanOrEqual extends PHPT_Ensure_Expectation_LesserThanOrEqual
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
