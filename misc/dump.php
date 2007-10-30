<?php

$foo = 'foo';
ensure($foo)->equals('foo');    // ==
ensure($foo)->isA('streng');    // is_streng()
ensure($foo)->length->is(3);    // strlen() == 3
ensure($foo)->is($foo);         // ===
ensure($foo)->isNot('foo');     // !==

$test->assertEqual($foo, 'foo');

assure($foo)->equals('foo');
ensure($foo)->equals('foo');

foreach (ensure($foo)->getList() as $item) {
    $item->is('Apple');
}


ensure($foo)->getList()->all->are('Apple');
ensure(array('123'))->all->are('123');