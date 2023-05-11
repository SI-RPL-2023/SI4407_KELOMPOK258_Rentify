<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
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
    $price = 'Rp ' . number_format($data->price / 1, 2);
    return view('DetailProperty', compact('data', 'price'));
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

Route::get('/payment/{id}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    $total = DB::table('reservations')->where('id_user', Auth::id())->first();
    return view('payment', compact('data', 'total'));
})->name('payment');

Route::get('/after_payment', function () {
    return view('after_payment');
});


Route::get('/history', function () {
    $data = DB::table('histories')->where('id_user', Auth::id())->first();
    $reservasi = DB::table('reservations')->where('id', $data->id_reservasi)->get();
    $property = DB::table('properties')->where('id', $data->id_property)->first();
    $formattedPrice = 'Rp ' . number_format($property->price / 1, 2);
    
    return view('history_penyewa', compact('property', 'reservasi', 'formattedPrice'));
});

Route::get('/review/{id}', function ($id) {
    $data = DB::table('reviews')->where('id_property', $id)->first();
    return view('review_add', ['data' => $data]);
});

Route::get('/review_add/{add}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    return view('review_add', ['data' => $data]);
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
Route::post('/reservasi', [ReservationController::class, 'store']);
Route::post('/after_payment/{id}', [HistoryController::class, 'store']);
Route::post('/review_add/{id}', [ReviewController::class, 'store']);
