<?php

use Illuminate\Support\Facades\Route;

Route::match(['get','post'], '/evaluation', function () {
    $name = request('name');
    $prelim = request('prelim');
    $midterm = request('midterm');
    $final = request('final');
    return view('evaluation', compact('name','prelim','midterm','final'));
});



