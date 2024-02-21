<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

if (isItTrue(true)) {
    print("Message 1!" . PHP_EOL);
}
if (isItTrue(false)) {
    print("Message 2!" . PHP_EOL);
}

print("The end." . PHP_EOL);
