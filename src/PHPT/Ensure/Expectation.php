<?php

interface PHPT_Ensure_Expectation
{
    public function __construct($value);
    public function evaluate(PHPT_Ensure_Policy $policy);
}