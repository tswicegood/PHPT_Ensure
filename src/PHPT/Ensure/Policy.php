<?php

class PHPT_Ensure_Policy
{
    private $_current_argument = 0;
    private $_expectations = array();
    private $_processed = false;
    private $_passed_arguments = array();
    private $_argument = '';
    
    public function __construct($value)
    {
        $this->_argument = $value;
    }
    
    public function __destruct()
    {
        $result = $this->process();
        if (!is_null($result)) {
            echo $result, "\n";
        }
    }
    
    public function __get($key)
    {
        switch ($key) {
            case 'value' :
                return $this->_argument;
            
            case 'current_argument' :
                return $this->_passed_arguments[$this->_current_argument];
            
            case 'passed_arguments' :
                return $this->_passed_arguments;

            case 'expectations' :
                return $this->_expectations;
        }
    }
    
    public function __set($key, $value)
    {
        throw new PHPT_Ensure_Policy_PropertyWriteException();
    }
    
    public function __call($method, $arguments)
    {
        $handler_class = 'PHPT_Ensure_Handler_' . $method;
        if (!class_exists($handler_class, true)) {
            $handler_class = 'PHPT_Ensure_HandlerConcrete';
        }
        $handler = new $handler_class($method);
        $this->_current_argument = count($this->_passed_arguments);
        if (count($arguments) > 1) {
            $this->_passed_arguments[$this->_current_argument] = $arguments;
        } elseif (count($arguments) == 1) {
            $this->_passed_arguments[$this->_current_argument] = array_shift($arguments);
        }
        call_user_func_array(
            array($handler, 'handle'),
            array_merge(array($this), $arguments)
        );
        return $this;
    }
    
    public function registerExpectation($expectation)
    {
        $this->_expectations[] = $expectation;
    }
    
    public function process()
    {
        if ($this->_processed == true) {
            return;
        }

        $processor = new PHPT_Ensure_Policy_Processor();
        $return = $processor->process($this);
        
        $this->_processed = true;
        return $return;

    }
}

class PHPT_Ensure_Policy_PropertyWriteException extends Exception {}

