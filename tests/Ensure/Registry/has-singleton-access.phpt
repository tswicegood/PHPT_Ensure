--TEST--
PHPT_Ensure_Registry::getInstance() can be used to retrieve a Singleton version of the class
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

assert('PHPT_Ensure_Registry::getInstance() === PHPT_Ensure_Registry::getInstance()');

?>
===DONE===
--EXPECT--
===DONE===
