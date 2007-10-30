--TEST--
Every call gets sent to a PHPT_Ensure_Handler
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

class PHPT_Ensure_Handler_Foobar {
    public function accept($v, $arg) {
        echo __METHOD__, " was called with ", get_class($v), " and " . $arg . "\n";
    }
}

$policy = new PHPT_Ensure_Policy('foo');
$policy->foobar('foo');

?>
===DONE===
--EXPECT--
PHPT_Ensure_Handler_Foobar::accept was called with PHPT_Ensure_Policy and foo
===DONE===