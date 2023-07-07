<?php

//use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\ArtikelController;

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
    return view('beranda', [
        "title" => "Home"
    ]);
});

Route::get('/hidroponik', function () {
    return view('hidroponik',[
        "title" => "Hidroponik"
    ] );
});

Route::get('/perlengkapan', function () {
    return view('perlengkapan',[
        "title" => "Perlengkapan"
    ]);
});

Route::get('/greenhouse', function () {
    return view('greenhouse',[
        "title" => "Greenhouse"
    ]);
});

Route::get('/penanam/add', function () {
    return view('addPnm',[
        "title" => "addPnm"
    ]);
});

Route::get('/hasil', function () {
    return view('hasil',[
        "title" => "hasil"
    ]);
});


Route::get('/artikel', [ArtikelController::class, 'index']);
//Halamn Single post
Route::get ( 'artikel/{slug}', [ArtikelController::class,'show']); 


Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "home",
        "name" => "Lulu Nadhia",
        "email" => "lulunadhia@gmail.com",
        "image" => "asa.jpg"
]);
});

Route::controller(AdminController::class)->group(function() {
    Route::get('user/', 'index');
    Route::get('user/add', 'add');
    Route::post('user/store', 'store');
    Route::get('user/edit/{id}', 'edit');
    Route::post('user/update/{id}', 'update');
    Route::get('user/delete/{id}', 'delete');
});

#Login 
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');

// Route::get('/register',[LoginController::class, 'register'])->name('register');
// Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

//chatbot
Route::get('/welcome', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);

//penanam
use App\Http\Controllers\PenanamController;
Route::controller(PenanamController::class)->group(function(){
    Route::get('penanam/','index');
    Route::get('penanam/standar','standar');
});
//spk
use App\Http\Controllers\SPKController;
Route::controller(SPKController::class)->group(function(){
    Route::get('penanam/add','addPnm');
    Route::post('penanam/store','storePnm');
    Route::get('spk/kriteria', 'krite');
});

//sistem
Route::controller(SistemController::class)->group(function(){
    Route::get('sistem/', 'index');
    Route::get('sistem/add', 'add');
    Route::post('sistem/store', 'store');
    Route::get('sistem/delete/{id}','delete');
    Route::get('sistem/edit/{id}', 'edit');
    Route::post('sistem/update/{id}','update');
    
});



