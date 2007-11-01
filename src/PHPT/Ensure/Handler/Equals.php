<?php

class PHPT_Ensure_Handler_Equals
{
    public function __construct()
    {
        
    }
    
    public function handle(PHPT_Ensure_Policy $policy)
    {
        $policy->registerExpectation(
            new PHPT_Ensure_Expectation_Equals(
                $policy->current_argument
            )
        );
    }
}