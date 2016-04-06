<?php

namespace DBSeller\Legacy;

class Emulate {

  public static function create() {
    return new static();
  }

  public function run() {

    if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
      $emulate = new PHP53\Emulate();
      $emulate->run();
    }
  }

} 
