--TEST--
This is a sample of how this code should fail
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';


assert('class_exists("PHPT_Ensure", true)');

/**
 * there is a bug in PHP that's been filed that keeps this from working without
 * assigning
 * @todo add bug #
 */
$t = ensure('foobar')->equals('barfoo');

?>
--EXPECT--
values ['foobar'] and ['barfoo'] are not equal
