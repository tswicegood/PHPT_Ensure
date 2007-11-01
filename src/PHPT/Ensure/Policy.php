<?php

class PHPT_Ensure_Policy
{
    private $_expectations = array();
    private $_value = '';
    
    public function __construct($value)
    {
        $this->_value = $value;
    }
    
    public function __get($key)
    {
        if ($key == 'value') {
            return $this->_value;
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
        call_user_func_array(
            array($handler, 'accept'),
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