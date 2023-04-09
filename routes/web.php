<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\tablescontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\studentscontroller;
use App\Http\Controllers\privacypolicycontroller;
use App\Http\Controllers\termsandconditioncontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[homecontroller::class, 'index' ]);
Route::get('/about',[aboutcontroller::class, 'index' ]);
Route::get('/blog',[blogcontroller::class, 'index' ]);
Route::get('/privacypolicy',[privacypolicycontroller::class, 'index' ]);
Route::get('/services',[servicescontroller::class, 'index' ]);
Route::get('/terms&condition',[termsandconditioncontroller::class, 'index' ]);
Route::get('/students',[studentscontroller::class, 'index' ]);
Route::get('/tables',[tablescontroller::class, 'index' ]);
Route::resource('/students', studentscontroller::class);
