<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [WelcomeController::class,'index']);
Route::get('/about', [WelcomeController::class,'about']);
Route::get('/articles/{id}', [WelcomeController::class,'articles']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


Route::get('/greeting', [WelcomeController::class, 'greeting']);



// Route::get('/world', function () {
//    return 'World';
// });



// Route::get('/about', function () {
//    return 'Nama : Louis Judia B Sinaga <br>
//    NIM : 2141720004';
// });

// Route::get('/user/{name}', function ($name) {
// return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/user/{name?}', function ($name=null) {
// return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='John') {
// return 'Nama saya '.$name;
// });

