<?php

class PHPT_Ensure_Policy
{
    private $_current_value = 0;
    private $_expectations = array();
    private $_passed_values = array();
    private $_value = '';
    
    public function __construct($value)
    {
        $this->_value = $value;
    }
    
    public function __get($key)
    {
        switch ($key) {
            case 'value' :
                return $this->_value;
            
            case 'current_value' :
                return $this->_passed_values[$this->_current_value];
            
            case 'passed_values' :
                return $this->_passed_values;
        }
    }
    
    public function __set($key, $value)
    {
        throw new PHPT_Ensure_Policy_PropertyWriteException();
    }
    
    public function __call($method, $arguments)
    {
        $handler_class = 'PHPT_Ensure_Handler_' . $method;
        $handler = new $handler_class();
        $this->_current_value = count($this->_passed_values);
        if (count($arguments) > 1) {
            $this->_passed_values[$this->_current_value] = $arguments;
        } elseif (count($arguments) == 1) {
            $this->_passed_values[$this->_current_value] = array_shift($arguments);
        }
        call_user_func_array(
            array($handler, 'handle'),
            array_merge(array($this), $arguments)
        );
    }
    
    public function registerExpectation($expectation)
    {
        $this->_expectations[] = $expectation;
    }
    
    public function finalize()
    {
        foreach ($this->_expectations as $expectation)
        {
            $expectation->evaluate($this);
        }
    }
}

class PHPT_Ensure_Policy_PropertyWriteException extends Exception {}