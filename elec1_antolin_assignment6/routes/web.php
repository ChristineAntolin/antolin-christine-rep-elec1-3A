<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/{id}/{name}', function ($id, $name) {
    return view('display', [
        'title' => 'Student Profile',
        'data' => [
            'Student ID' => $id,
            'Student Name' => $name
        ]
    ]);
});


Route::get('/course/{course}/{year?}', function ($course, $year = 1) {
    return view('display', [
        'title' => 'Course Enrollment',
        'data' => [
            'Course' => $course,
            'Year Level' => $year
        ]
    ]);
});


Route::get('/ojt/{company}/{city}/{allowance?}', function ($company, $city, $allowance = 'No') {
    return view('display', [
        'title' => 'OJT Company Information',
        'data' => [
            'Company Name' => $company,
            'City' => $city,
            'Allowance' => $allowance
        ]
    ]);
});


Route::get('/event/{event}/{participant}/{year}', function ($event, $participant, $year) {
    return view('display', [
        'title' => 'Event Registration',
        'data' => [
            'Event Name' => $event,
            'Participant Name' => $participant,
            'Year Level' => $year
        ]
    ]);
});



