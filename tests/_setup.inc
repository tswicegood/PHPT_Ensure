<?php

function __autoload($class) {
  @include dirname(__FILE__) . '/../src/' . str_replace('_', '/', $class) . '.php';
}

