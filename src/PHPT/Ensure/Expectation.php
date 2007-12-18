<?php

interface PHPT_Ensure_Expectation
{
    public function __construct($value = null);
    public function evaluate(PHPT_Ensure_Policy $policy);

    /**
     * Return a plain text description of what this Expectation represents.
     *
     * Example:
     *  - value should equal 'foobar'
     *  - value should be between 100 and 200
     */
    public function getDescription();

    public function getStatus();
}
