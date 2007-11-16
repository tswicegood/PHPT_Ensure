--TEST--
This is a sample of how this code should fail
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';


assert('class_exists("PHPT_Ensure", true)');

ensure('foobar')->equals('barfoo');

?>
--EXPECT--
value is expected to be equal to 'barfoo'
001- 'barfoo'
001+ 'foobar'
