<?php

class PHPT_SimplePolicy extends PHPT_Ensure_Policy
{
    public $value = 'foobar';
    public $current_argument = 'barfoo';
    public $passed_arguments = array('barfoo');
    
    public function __construct() { }
    public function __destruct() { }
    
    public function registerExpectation(PHPT_Ensure_Expectation $expectation) {
        echo __METHOD__, " was called\n";
    }
}