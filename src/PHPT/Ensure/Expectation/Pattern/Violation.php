<?php

class PHPT_Ensure_Expectation_Pattern_Violation extends PHPT_Ensure_ExpectationAbstract_SimpleViolation
{
    protected $_message = 'pattern [%2$s] was not detected in [%1$s]';
    
    protected function _dumpExpectation($expectation)
    {
        return "'{$expectation}'";
    }
}
