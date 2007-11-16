--TEST--
This test shows how an array would be outputted in the case of ensure(array())
--FILE--
<?php

require_once dirname(__FILE__) . '/_setup.inc';

// not necessary in a real test, injected by way of --ENSURE--
class_exists('PHPT_Ensure', true);

ensure(array('one', 'two', 'three', 'four'))->equals(array('one', 'dos', 'three', 'quatro'));

?>
===DONE===
--EXPECT--
value is expected to be equal to array (
  0 => 'one',
  1 => 'dos',
  2 => 'three',
  3 => 'quatro',
)
003-   1 => 'dos',
003+   1 => 'two',
005-   3 => 'quatro',
005+   3 => 'four',
===DONE===

