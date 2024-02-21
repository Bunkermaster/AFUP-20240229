<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

isItTrue(false) | isItTrue(false) or print("Message 1!" . PHP_EOL);
isItTrue(false) | isItTrue(true) or print("Message 2!" . PHP_EOL);
isItTrue(true) | isItTrue(true) or print("Message 3!" . PHP_EOL);

print("The end." . PHP_EOL);
