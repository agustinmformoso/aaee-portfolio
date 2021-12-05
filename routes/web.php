<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::view('/', 'welcome');

Route::get('portfolio/{slug}', function ($slug) {
    $user = User::with('skill')->with('education')->with('service')->with('rrss')->with('project')->with('professionalSkill')->with('workExperience')->with('review')->with('pricing')->with('post')->where('slug', $slug)->first();

    if ($user) {
        return view('portfolio')->with('user', $user);
    } else {
        return abort(404, 'Page not found');
    }
});

Route::get('logout-user', UserController::class . '@logout_user')->name('logout-user');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::group(['middleware' => ['role:admin']], function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);
    });


    Route::group(['middleware' => ['role:client']], function () {

        Route::get('my-portfolio', function () {

            return view('my-portfolio');
        })->name('my-portfolio');
    });
});
