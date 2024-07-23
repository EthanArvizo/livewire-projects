<?php

;

use App\Livewire\Calculator;
use Illuminate\Support\Facades\Route;


Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

Route::get('/calculator', Calculator::class)->name('calculator');
