<?php

use App\Models\job;
use App\Models\Jobs;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs'=> Jobs::all()
    ]);
});
Route::get('/job/{id}', function ($id) {
    
   $job = Jobs::find($id);
    return view('job',[
       'job'=> $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

// ===============using a decleared array============

// $jobs = [
//     [
//         'id'=> 1,
//         'title'=>'programmer',
//         'salary'=> 300000,
//     ],
//     [
//         'id'=> 2,
//         'title'=>'techear',
//         'salary'=> 3290000,
//     ],
//     [
//         'id'=> 3,
//         'title'=>'engineer',
//         'salary'=> 4000000,
//     ]
// ];

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/jobs', function () use($jobs) {
//     return view('jobs',[
//         'jobs'=> $jobs
//     ]);
// });
// Route::get('/job/{id}', function ($id) use($jobs) {
    
//    $job = Arr::first($jobs, fn($job)=>$job['id']==$id);
//     return view('job',[
//        'job'=> $job
//     ]);
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
