--TEST--
PHPT_Ensure_Policy has a $value property that will thrown an exception when you try
to write to change it after instantiation.
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$random = 'Random Int: ' . rand(100, 200);
$policy = new PHPT_Ensure_Policy($random);

assert('$policy->value == $random');

try {
    $policy->value = 'foobar';
    trigger_error('exception not caught');
} catch (PHPT_Ensure_Policy_PropertyWriteException $e) {
    
}

?>
===DONE===
--EXPECT--
===DONE===
