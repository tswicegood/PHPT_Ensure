--TEST--
getStatus() === false when value is not a scalar
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$values = array(
    array(),
    new StdClass(),
);

foreach ($values as $value) {
    $scalar = new PHPT_Ensure_Expectation_Scalar();
    $scalar->evaluate(new PHPT_Ensure_Policy($value));
    assert('$scalar->getStatus() === false');
}

?>
===DONE===
--EXPECT--
===DONE===

