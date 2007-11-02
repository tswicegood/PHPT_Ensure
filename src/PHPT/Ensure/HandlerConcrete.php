<?php

class PHPT_Ensure_HandlerConcrete implements PHPT_Ensure_Handler
{
    private $_expectation = 'PHPT_Ensure_Expectation_';
    
    public function __construct($name)
    {
        $this->_expectation .= ucfirst($name);
    }
    
    public function handle(PHPT_Ensure_Policy $policy)
    {
        $policy->registerExpectation(
            new $this->_expectation($policy->current_argument)
        );
    }
}
