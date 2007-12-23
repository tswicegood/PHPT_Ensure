<?php

class PHPT_Ensure_Expectation_Equals extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value is expected to be equal to %s';
    protected function _isValid(PHPT_Ensure_Policy $policy)
    {
        return $policy->value == $this->_expectation;
    }
}
