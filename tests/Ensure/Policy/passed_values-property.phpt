--TEST--
All method parameters that were passed via chaining are added to a passed_values array
in the order in which they were called
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_Ensure_Handler_Foobar
{
    public function handle(PHPT_Ensure_Policy $policy) {
    }
}

$policy = new PHPT_Ensure_Policy('foobar');
$policy->foobar('foo');
$policy->foobar('bar');

$random = array(rand(100, 200), rand(200, 300));
$policy->foobar($random);

$expected = array(
    'foo',
    'bar',
    $random,
);

assert('$policy->passed_values == $expected');

?>
===DONE===
--EXPECT--
===DONE===