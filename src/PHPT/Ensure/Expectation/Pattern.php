<?php

class PHPT_Ensure_Expectation_Pattern extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return preg_match($this->_expectation, $policy->value);
    }
}
