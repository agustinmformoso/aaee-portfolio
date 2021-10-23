<?php

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

Route::get('/{slug}', function ($slug) {
    $user = User::with('skill')->with('education')->where('slug', $slug)->first();

    if ($user) {
        return view('portfolio')->with('user', $user);
    } else {
        return view('error');
    }
});
