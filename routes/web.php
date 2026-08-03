<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $student = [
        'name'    => 'Juan Dela Cruz',
        'number'  => '2024-00123',
        'course'  => 'Bachelor of Science in Information Technology',
        'section' => 'BSIT-3A',
        'subject' => 'Web Development',
        'date'    => now()->format('F d, Y'),
    ];

    return view('welcome', compact('student'));
});