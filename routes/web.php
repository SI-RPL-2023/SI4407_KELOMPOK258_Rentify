<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/add_property', function () {
    return view('addProperty');
});

Route::get('/property', function () {
    $data = DB::table('properties')->get();
    return view('property', ['data' => $data]);
});

Route::get('/detail/{id}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    return view('DetailProperty', ['data' => $data]);
});

Route::get('/my_property/{id}', function ($id) {
    $data = Property::where('id_pemilik', $id)->get();
    return view('myProperty', compact('data'));
})->middleware('auth');

Route::get('/favorite/{id}', function ($id) {
    $data = Property::whereHas('favorites', function ($query) use ($id) {
        $query->where('id_user', $id);
    })->get();
    return view('favorite', ['data' => $data]);
});


Route::get('/reservasi/{id}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    return view('reservasi', ['data' => $data]);
});


Route::get('/profile', function () {
    $data = User::find(Auth::user()->id);
    return view('profile', ['data' => $data]);
});



Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');
Route::post('/add_property', [PropertyController::class, 'store']);
Route::post('/favorite', [FavoriteController::class, 'store']);
Route::get('/favorite_delete/{id}', [FavoriteController::class, 'destroy']);
