<?php

use ThuraAung2493\WeightConversions\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toBe(220.462);
});
