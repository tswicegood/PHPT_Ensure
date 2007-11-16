<?php

class PHPT_Ensure_Reporter_Default
{
    public function __construct()
    {

    }

    public function handle(PHPT_Ensure_Policy $policy, PHPT_Ensure_Expectation $expectation)
    {
        if ($expectation->status) {
            return;
        }
        echo $expectation->getDescription(), "\n";
        
        echo new PHPT_Util_Diff(
            var_export($expectation->expectation, true),
            var_export($policy->value, true)
        ), "\n";
    }
}

