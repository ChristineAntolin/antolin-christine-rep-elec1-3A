<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation', function () {
    $student = [
        'name' => 'Christine Antolin',
        'prelim' => 92,
        'midterm' => 88,
        'final' => 94
    ];
    return view('evaluation', ['data' => $student]);
});



