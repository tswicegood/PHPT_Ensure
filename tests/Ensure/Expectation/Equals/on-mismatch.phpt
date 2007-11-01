--TEST--
evaluate() throws an exception if Policy->value is not equal
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$expectation = new PHPT_Ensure_Expectation_Equals('barfoo');
try {
    $expectation->evaluate($policy);
    trigger_error('exception not caught');
} catch (PHPT_Ensure_Expectation_Equals_Invalid $e) {
    
}

?>
===DONE===
--EXPECT--
===DONE===