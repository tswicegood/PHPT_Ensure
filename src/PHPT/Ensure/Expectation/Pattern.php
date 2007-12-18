<?php

class PHPT_Ensure_Expectation_Pattern extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value is expected to match pattern %s';

    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return (bool)preg_match($this->_expectation, $policy->value);
    }
}
