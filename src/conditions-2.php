<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

isItTrue(true) or print("Message 1!" . PHP_EOL);
isItTrue(false) or print("Message 2!" . PHP_EOL);

print("The end." . PHP_EOL);
