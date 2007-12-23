<?php

class PHPT_Ensure_Expectation_Scalar extends PHPT_Ensure_ExpectationAbstract_SimpleExpectation
{
    protected $_description = 'value should be a scalar';
    public function _isValid(PHPT_Ensure_Policy $policy)
    {
        return is_scalar($policy->value);
    }
}
