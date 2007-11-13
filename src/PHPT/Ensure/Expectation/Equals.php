<?php

class PHPT_Ensure_Expectation_Equals extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_message = 'values were expected to be equal';
    protected function _valid(PHPT_Ensure_Policy $policy)
    {
        return $policy->value == $this->_expectation;
    }
}
