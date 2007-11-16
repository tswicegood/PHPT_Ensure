<?php

class PHPT_Ensure_Policy_Processor
{
    public function __construct()
    {
        $this->reporter = $this->_reporterFactory();
    }

    public function process(PHPT_Ensure_Policy $policy)
    {
        $violation_stack = array();
        
        foreach ($policy->expectations as $expectation) {
            $expectation->evaluate($policy);
            $this->reporter->handle($policy, $expectation);
        }
    }

    private function _reporterFactory()
    {
        $reporter_name = 'PHPT_Ensure_Reporter_' . PHPT_Ensure_Registry::getInstance()->opts['ensure_reporter'];
        return new $reporter_name();
    }
}

