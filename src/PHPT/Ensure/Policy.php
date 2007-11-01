<?php

class PHPT_Ensure_Policy
{
    private $_current_argument = 0;
    private $_expectations = array();
    private $_finalized = false;
    private $_passed_arguments = array();
    private $_argument = '';
    
    public function __construct($value)
    {
        $this->_argument = $value;
    }
    
    public function __destruct()
    {
        try {
            $this->finalize();
        } catch (PHPT_Ensure_Policy_ExceptionList $e) {
            echo $e, "\n";
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
    
    public function finalize()
    {
        if ($this->_finalized == true) {
            return;
        }
        
        $exception_stack = array();
        
        foreach ($this->_expectations as $expectation) {
            try {
                $expectation->evaluate($this);
            } catch (Exception $e) {
                $exception_stack[] = $e;
            }
        }
        
        $this->_finalized = true;
        if (!empty($exception_stack)) {
            throw new PHPT_Ensure_Policy_ExceptionList(
                $exception_stack
            );
        }
    }
}

class PHPT_Ensure_Policy_PropertyWriteException extends Exception {}
class PHPT_Ensure_Policy_ExceptionList extends Exception {
    public function __construct(array $exceptions)
    {
        $this->_exceptions = $exceptions;
    }
    
    public function __toString()
    {
        return implode('', $this->_exceptions);
    }
}