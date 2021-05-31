<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Gilang Liberty';
//     return view('about');
// });

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
 
    Route::get('/index', [PagesController::class, 'home'])->name('home');
    Route::resource('students', StudentsController::class);
 
    Route::get('/about', [PagesController::class, 'about']);
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
});

//Students
// Route::get('/students/{student}/edit', [StudentsController::class,'edit']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::get('/students', [StudentsController::class, 'index']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::put('/students/{student}',[StudentsController::class,'update']);


