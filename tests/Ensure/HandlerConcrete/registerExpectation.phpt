--TEST--
PHPT_Ensure_HandlerConcrete::handle() will call registerExpectation on the provided $policy
based on the name it was instantiated with
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';
require_once dirname(__FILE__) . '/../Handler/_mock-policy.inc';

class PHPT_Ensure_Expectation_Foobar implements PHPT_Ensure_Expectation {
    public function __construct($data) {
        echo __CLASS__, " was instantiated\n";
    }
    
    public function evaluate(PHPT_Ensure_Policy $policy)
    {
        
    }

    public function getDescription()
    {

    }
}

$handler = new PHPT_Ensure_HandlerConcrete('foobar');
$handler->handle(new PHPT_SimplePolicy());

?>
===DONE===
--EXPECT--
PHPT_Ensure_Expectation_Foobar was instantiated
PHPT_SimplePolicy::registerExpectation was called
===DONE===
