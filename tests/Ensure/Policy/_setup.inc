<?php

require_once dirname(__FILE__) . '/../_setup.inc'; 

class PHPT_SimpleExpectation
{
    public function evaluate(PHPT_Ensure_Policy $policy) {
        static $counter = 0;
        echo __METHOD__, " was called ", ++$counter, "\n";
        return $this;
    }
    public function __toString() {
        static $counter = 0;
        return __METHOD__ . " was called " . ++$counter . "\n";
    }
}

class PHPT_Ensure_Handler_Foobar {
    public function handle($v) {
        echo __METHOD__, " was called with ", get_class($v), " and " . $v->current_argument, "\n";
    }
}
