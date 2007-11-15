<?php

class PHPT_Ensure_Policy_Processor
{
    public function __construct()
    {
        $this->reporter = new PHPT_Ensure_Reporter_Default();
    }

    public function process(PHPT_Ensure_Policy $policy)
    {
        $violation_stack = array();
        
        foreach ($policy->expectations as $expectation) {
            $expectation->evaluate($policy);
            $this->reporter->handle($policy, $expectation);
        }
    }
}

