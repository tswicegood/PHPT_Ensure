<?php

class PHPT_Ensure_Expectation_IsNotTrue extends PHPT_Ensure_Expectation_IsTrue
{
    protected $_message = 'value is expected to be not true';
    
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return !parent::_valid($policy);
    }
}
