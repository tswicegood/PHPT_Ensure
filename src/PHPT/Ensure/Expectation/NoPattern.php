<?php

class PHPT_Ensure_Expectation_NoPattern extends PHPT_Ensure_Expectation_Pattern
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
