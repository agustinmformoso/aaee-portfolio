<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RrssController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;

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
        Route::get('/admin-dashboard', function () {
            return view('admin.admin-dashboard');
        })->name('admin-dashboard');

        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);
    });

    Route::group(['middleware' => ['role:client']], function () {
        Route::get('/user-dashboard', function () {
            return view('user.user-dashboard');
        })->name('user-dashboard');

        Route::get('/actions', [UserController::class, 'editUser']);
        Route::put('/actions/{id}/update', [UserController::class, 'updateUser']);

        Route::put('rrss/{rrss}', [RrssController::class, 'update'])->name('rrss.update');
        Route::post('/rrss/create-rrss', [RrssController::class, 'store']);

        Route::post('/actions/create-skill', [SkillController::class, 'storeUser']);
        Route::put('skill/{skill}', [SkillController::class, 'updateUser'])->name('skill.updateUser');
        Route::delete('/actions/{id}/delete-skill', [SkillController::class, 'destroyUser']);

        Route::put('service/{service}', [ServiceController::class, 'update'])->name('service.update');

        Route::get('my-portfolio', function () {
            return view('my-portfolio');
        })->name('my-portfolio');
    });
});
