<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

null !== $value = returnPositiveValue(-15)
      or $value = returnPositiveValue(9001);

var_dump($value);
