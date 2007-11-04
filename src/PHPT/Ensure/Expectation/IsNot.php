<?php

class PHPT_Ensure_Expectation_IsNot extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return $policy->value !== $this->_expectation;
    }
}
