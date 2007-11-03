--TEST--
All method parameters that were passed via chaining are added to a passed_arguments array
in the order in which they were called
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
// catch output from mock
ob_start();
$policy->foobar('foo');
$policy->foobar('bar');

$random = array(rand(100, 200), rand(200, 300));
$policy->foobar($random);
ob_clean();

$expected = array(
    'foo',
    'bar',
    $random,
);

assert('$policy->passed_arguments == $expected');

?>
===DONE===
--EXPECT--
===DONE===
