--TEST--
When PHPT_Ensure_Registry is instantiated, it has an opts['ensure_reporter'] value 
that is set to Default automatically
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$registry = new PHPT_Ensure_Registry();
assert('$registry->opts["ensure_reporter"] == "Default"');

// via Singleton
assert('PHPT_Ensure_Registry::getInstance()->opts["ensure_reporter"] == "Default"');

?>
===DONE===
--EXPECT--
===DONE===

