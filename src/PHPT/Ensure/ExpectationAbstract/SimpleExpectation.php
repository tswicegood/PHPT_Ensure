<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleExpectation implements PHPT_Ensure_Expectation
{
    protected $_expectation = null;
    protected $_description = null;
    protected $_status = false;
    
    public function __construct($value = null)
    {
        if (!is_null($value)) {
            $this->_expectation = $value;
        }
       
        if (!empty($this->_description)) {
            $this->_description = sprintf($this->_description, var_export($value, true));
        }
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        $this->_status = $this->_isValid($policy);
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function getExpectation()
    {
        return $this->_expectation;
    }
    
    abstract protected function _isValid(PHPT_Ensure_Policy $policy);

}
