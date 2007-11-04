--TEST--
When cast to string, outputs message
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$policy = new PHPT_Ensure_Policy('foobar');
$violation = new PHPT_Ensure_Expectation_Identical_Violation($policy, 'barfoo');
echo $violation, "\n";

?>
===DONE===
--EXPECT--
values ['foobar'] and ['barfoo'] are not identical
===DONE===
