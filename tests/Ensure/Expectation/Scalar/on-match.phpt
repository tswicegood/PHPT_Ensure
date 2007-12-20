--TEST--
getStatus() === true when scalar matches
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$values = array(
    'string',
    123,
    123.321,
    true,
);

foreach ($values as $value) {
    $scalar = new PHPT_Ensure_Expectation_Scalar();
    $scalar->evaluate(new PHPT_Ensure_Policy($value));
    assert('$scalar->getStatus() === true');
}

?>
===DONE===
--EXPECT--
===DONE===

