<?php

class PHPT_Ensure_Expectation_GreaterThan extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value is expected to be greater than %d';

    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return $policy->value > $this->_expectation;
    }
}
