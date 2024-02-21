<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

isItTrue(true) and print("Message 1!" . PHP_EOL);
isItTrue(false) and print("Message 2!" . PHP_EOL);

print("The end." . PHP_EOL);
