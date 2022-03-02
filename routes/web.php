<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CostumAuthController;

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

/*oldalak*/
Route::get('/', function () { return view('pages.index'); });
Route::get('/gepek', function () { return view('pages.gepek'); });
Route::get('/kapcsolatok', function () { return view('pages.kapcsolatok'); });
Route::get('/vasarlas', function () { return view('pages.vasarlas'); });
Route::get('/cikkek_etrend', function () { return view('pages.cikkek_etrend'); });
Route::get('/bejelentkezes', function () { return view('pages.bejelentkezes'); });
Route::get('/regisztracio', function () { return view('pages.regisztracio'); });
Route::get('/elfelejtettjelszo', function () { return view('pages.elfelejtettjelszo'); });
Route::get('/berletVasarlas', function () { return view('pages.berletVasarlas'); });
Route::get('/admin', function () { return view('admin'); });

/*gépek oldal
Route::get('/api/gepek/search', [GepekController::class, 'search']);
Route::get('/api/gepek/sort', [GepekController::class, 'sortBy']);
Route::get('/api/gepek/expand={child}', [GepekController::class, 'expand']);
Route::get('/api/gepek', [GepekController::class, 'index']);
Route::get('/api/gepek/{id}', [GepekController::class, 'show']);
Route::put('/api/gepek/{id}', [GepekController::class, 'update']);
Route::post('/api/gepek', [GepekController::class, 'store']);
Route::delete('/api/gepek/{id}', [GepekController::class, 'destroy']);
*/



//Route::get('/cikkek', function () { return view('cikkek_etrend'); });
/*  Route::get('/bejelentkezes', function () { return view('bejelentkezes'); });
    Route::get('/berletvasarlas', function () { return view('berletvasarlas'); });
    Route::get('/elfjelszo', function () { return view('elfjelszo'); });
    Route::get('/regisztracio', function () { return view('regisztracio'); });      */

/*apik
Route::get('/api/task/search', [TaskController::class, 'keres']);
Route::get('/api/task/sort', [TaskController::class, 'rendez']);
Route::delete('/api/task/{id}', [TaskController::class, 'adatTroles']);
Route::put('/api/task/{id}', [TaskController::class, 'adatFrissites']);
Route::get('/api/task/{id}', [TaskController::class, 'egyAdat']);
Route::post('/api/task', [TaskController::class, 'adatFelvetel']);*/



/*Login, regist*/

Route::get('/login', function(){
    return view("Login");
});

Route::get('/login', [CostumAuthController::class, 'login']);
Route::get('/registration', [CostumAuthController::class, 'registration']);
Route::post('/register-user', [CostumAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CostumAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CostumAuthController::class, 'dashboard']);