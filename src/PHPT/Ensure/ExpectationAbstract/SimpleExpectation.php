<?php

abstract class PHPT_Ensure_ExpectationAbstract_SimpleExpectation implements PHPT_Ensure_Expectation
{
    protected $_expectation = null;
    protected $_message = null;
    protected $_status = false;
    
    public function __construct($value = null)
    {
        $this->_expectation = $value;
       
        if (!empty($this->_message)) {
            $this->_message = sprintf($this->_message, var_export($value, true));
        }
    }
    
    public function __get($key)
    {
        switch ($key) {
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

    public function getStatus()
    {
        return $this->_status;
    }
    
    abstract protected function _valid(PHPT_Ensure_Policy $policy);

}
