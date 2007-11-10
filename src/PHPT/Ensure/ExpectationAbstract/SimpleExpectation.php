<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleExpectation implements PHPT_Ensure_Expectation
{
    protected $_expectation = null;
    protected $_violation = 'PHPT_Ensure_Expectation_%s_Violation';
    
    public function __construct($data)
    {
        $this->_expectation = $data;
        $this->_violation = sprintf(
            $this->_violation,
            array_pop(explode('_', get_class($this)))
        );
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        if ($this->_valid($policy)) {
            return;
        }
        
        return new $this->_violation($policy, $this->_expectation);
    }
    
    abstract protected function _valid(PHPT_Ensure_Policy $policy);

}
