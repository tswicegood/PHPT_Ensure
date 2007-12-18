<?php

class PHPT_Ensure_Expectation_Is extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value is expected to be identical to %s';

    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return $policy->value === $this->_expectation;
    }
}
