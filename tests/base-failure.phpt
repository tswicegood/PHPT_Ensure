--TEST--
This is a sample of how this code should fail
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';


assert('class_exists("PHPT_Ensure", true)');

ensure('foobar')->equals('barfoo');

?>
--EXPECT--
values ['foobar'] and ['barfoo'] are not equal
