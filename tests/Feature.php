<?php

use NunoMaduro\SkeletonPhp\Example;

test('if the array contains only integers', function ($i) {
    expect($i)->toBeInt();
})->with(fn (): array => range(1, 99));

