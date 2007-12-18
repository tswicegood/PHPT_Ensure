<?php

class PHPT_Ensure_Reporter_Default
{
    public function __construct()
    {

    }

    public function handle(PHPT_Ensure_Policy $policy, PHPT_Ensure_Expectation $expectation)
    {
        if ($expectation->getStatus()) {
            return;
        }
        echo $expectation->getDescription(), "\n",
             "Expected:\n",
             "    ", var_export($expectation->getExpectation(), true), "\n",
             "Actual:\n",
             "    ", var_export($policy->value, true), "\n";
    }
}

