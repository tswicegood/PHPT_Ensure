<?php

class PHPT_Ensure_Expectation_NotEquals extends PHPT_Ensure_Expectation_Equals
{    
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
