<?php

use NunoMaduro\SkeletonPhp\Example;

it('foo', function (string $foo) {
    expect($foo)->toBe('42');
})->with('foo');
