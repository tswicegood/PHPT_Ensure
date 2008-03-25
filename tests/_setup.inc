<?php

function PHPT_Ensure_Test_Autoload($class) {
  @include dirname(__FILE__) . '/../src/' . str_replace('_', '/', $class) . '.php';
}

spl_autoload_register('PHPT_Ensure_Test_Autoload');

if (!class_exists('PHPT_Framework')) {
    // do subversion checkout
    if (file_exists(dirname(__FILE__) . '/../../../Core/trunk/src/PHPT/Framework.php')) {
        require_once dirname(__FILE__) . '/../../../Core/trunk/src/PHPT/Framework.php';
    } else {
        require_once 'PHPT/Framework.php';
    }
}

