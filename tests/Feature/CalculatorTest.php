<?php

use Illuminate\Support\Facades\Artisan;

test('addition', function () {

    $add = Artisan::call('calculate 1+1');

    expect($add)->toBe(2);
});

test('subtraction', function () {

    $sub = Artisan::call('calculate 10-5');

    expect($sub)->toBe(5);
});

test('multiplication', function () {

    $mult = Artisan::call('calculate 2*5');

    expect($mult)->toBe(10);
});

test('division', function () {

    $div = Artisan::call('calculate 100/4');

    expect($div)->toBe(25);
});

test('square root', function () {

    $sqrt = Artisan::call('calculate 16sqrt');

    expect($sqrt)->toBe(4);
});