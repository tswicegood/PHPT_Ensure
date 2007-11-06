<?php

class PHPT_Ensure_Expectation_NotLesserThan extends PHPT_Ensure_Expectation_LesserThan
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}