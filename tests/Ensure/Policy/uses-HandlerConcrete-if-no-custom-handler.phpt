--TEST--
If a __call() method is found without a custom Handler, use HandlerConcrete as the
fall back.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_Ensure_Expectation_WithoutHandler implements PHPT_Ensure_Expectation {
    public function __construct($data) {
        echo __CLASS__, " was instantiated with {$data}\n";
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy) {
        echo __METHOD__, " was called\n";
    }

    public function getDescription() { }
}

class_exists('PHPT_Ensure', true);

ensure('foobar')->withoutHandler('should be fine');

?>
===DONE===
--EXPECT--
PHPT_Ensure_Expectation_WithoutHandler was instantiated with should be fine
PHPT_Ensure_Expectation_WithoutHandler::evaluate was called
===DONE===
