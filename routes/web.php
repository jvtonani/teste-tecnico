<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;


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
    return view('auth.login');
})->name('homeLogin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/github-user-list', [App\Http\Controllers\GithubUserController::class, 'listGithubUser'])->name('github.userlist');

Route::post('/github-user-list/new-github-user', [App\Http\Controllers\GithubUserController::class, 'newGithubUser'])->name('github.newuser');

Route::get('/github-user-list/delete-github-user/{id}', [App\Http\Controllers\GithubUserController::class, 'deleteGithubUser'])->name('github.deleteuser');

Route::get('/{username}', [App\Http\Controllers\GithubUserController::class, 'listUserInfo'])->name('user.info');