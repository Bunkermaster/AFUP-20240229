<?php

function isItTrue(bool $isIt): bool
{
    return true === $isIt;
}

function returnPositiveValue(int $value): ?int
{
    return $value >= 0 ? $value : null;
}
