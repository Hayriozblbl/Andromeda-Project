<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('home');
// })->name('home');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

//posts route 

Route::get('/posts', [PostsController::class, 'index']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);


//users route

Route::get('/users', [UserController::class, 'index']);
Route::delete('users/destroy', 'UsersController@Destroy')->name('users.Destroy');
Route::resource('users', UserController::class);

Route::get('/country', [CountryController::class, 'index']);
// Route::delete('users/destroy', 'UsersController@Destroy')->name('users.Destroy');
  Route::resource('country', CountryController::class);



//verify Email

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
