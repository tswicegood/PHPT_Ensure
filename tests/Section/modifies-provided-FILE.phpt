--TEST--
modifyFile() will insert "class_exists('PHPT_Ensure', true);" into the beginning of
the FILE's contents property
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

$file = new PHPT_Section_FILE('foobar');
$file->filename = dirname(__FILE__) . '/foobar.php';

// sanity check
assert('$file->contents == "foobar"');

$ensure = new PHPT_Section_ENSURE();
$ensure->modifyFile($file);

echo $file->contents, "\n";

?>
===DONE===
--EXPECTF--
<?php
require_once '%sPHPT/Framework.php';
class_exists('PHPT_Ensure', true);
?>foobar
===DONE===
