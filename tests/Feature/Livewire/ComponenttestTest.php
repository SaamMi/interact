<?php

use App\Livewire\Componenttest;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Componenttest::class)
        ->assertStatus(200);
});
