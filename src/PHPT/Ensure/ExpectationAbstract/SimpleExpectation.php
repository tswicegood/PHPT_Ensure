<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleExpectation implements PHPT_Ensure_Expectation
{
    protected $_expectation = null;
    protected $_message = null;
    protected $_status = false;
    protected $_violation = 'PHPT_Ensure_Expectation_%s_Violation';
    
    public function __construct($value = null)
    {
        $this->_expectation = $value;
        $this->_violation = sprintf(
            $this->_violation,
            array_pop(explode('_', get_class($this)))
        );
    }
    
    public function __get($key)
    {
        switch ($key) {
            case 'status' :
                return $this->_status;
            case 'expectation' :
                return $this->_expectation;
        }
    }

    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        $this->_status = $this->_valid($policy);
    }

    public function getDescription()
    {
        return $this->_message;
    }
    
    abstract protected function _valid(PHPT_Ensure_Policy $policy);

}
