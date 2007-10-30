<?php

class PHPT_Ensure_Policy
{
    public function __construct()
    {
        
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
}