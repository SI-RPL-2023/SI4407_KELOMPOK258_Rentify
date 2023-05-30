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

Route::get('/review', function () {
    return view('review');
});

Route::get('/edit_property/{id}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    return view('editProperty', ['data' => $data]);
});

Route::get('/property', function () {
    $data = DB::table('properties')->get();

    foreach ($data as $property) {
        $reviews = DB::table('reviews')->where('id_property', $property->id)->get();

        $rating = 0;
        $jumlah = 0;
        $satu = count($reviews->where('rating', 1));
        $dua = count($reviews->where('rating', 2));
        $tiga = count($reviews->where('rating', 3));
        $empat = count($reviews->where('rating', 4));
        $lima = count($reviews->where('rating', 5));

        $user = null;

        if ($reviews != null) {
            foreach ($reviews as $review) {
                $user = User::where('id', $review->id_user)->first();
                $rating += $review->rating;
                $jumlah += 1;
            }
        }

        $property->rating = $rating;
        $property->jumlah = $jumlah;
    }

    return view('property', compact('data'));
});

Route::get('/detail/{id}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    $review = DB::table('reviews')->where('id_property', $id)->get();
    $review2 = DB::table('reviews')->where('id_property', $id)->get();
    $rating = 0;
    $jumlah = 0;
    $satu = count(DB::table('reviews')->where('id_property', $id)->where('rating', 1)->get());
    
    $dua = count(DB::table('reviews')->where('id_property', $id)->where('rating', 2)->get());
    
    $tiga = count(DB::table('reviews')->where('id_property', $id)->where('rating', 3)->get());
    
    $empat = count(DB::table('reviews')->where('id_property', $id)->where('rating', 4)->get());
    
    $lima = count(DB::table('reviews')->where('id_property', $id)->where('rating', 5)->get());
    
    $user = null;

    if ($review != null) {
        foreach ($review2 as $review2) {
            $user = User::where('id', $review2->id_user)->first();
            $rating += $review2->rating;
            $jumlah += 1;
        }
        
    }
    if ($jumlah > 0) {
        $rating = $rating/$jumlah;
        $satu = $satu/$jumlah;
        $dua = $dua/$jumlah;
        $tiga = $tiga/$jumlah;
        $empat = $empat/$jumlah;
        $lima = $lima/$jumlah;
    }
    $review->satu = $satu;
    $review->dua = $dua;
    $review->tiga = $tiga;
    $review->empat = $empat;
    $review->lima = $lima;
    $price = 'Rp ' . number_format($data->price / 1, 2);
    return view('DetailProperty', compact('data', 'price', 'review', 'rating', 'user', 'jumlah'));
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
    $price = 'Rp ' . number_format($data->price / 1, 2);
    $harga = 'Rp ' . number_format($total->total / 1, 2);
    return view('payment', compact('data', 'total', 'harga', 'price'));
})->name('payment');

Route::get('/after_payment', function () {
    return view('after_payment');
});


Route::get('/history', function () {
    $data = DB::table('histories')->where('id_user', Auth::id())->get();

    if ($data != null) {
        foreach ($data as $history) {
            $property = DB::table('properties')->where('id', $history->id_property)->first();
            $reservasi = DB::table('reservations')->where('id', $history->id_reservasi)->first();
            $formattedPrice = 'Rp ' . number_format($property->price / 1, 2);
            $history->property = $property;
            $history->reservasi = $reservasi;
            $history->harga = $formattedPrice;
        }
    }

    return view('history_penyewa', compact('data'));
    
});

Route::get('/history_gedung/{id}', function ($id) {
    $data = DB::table('histories')->where('id_property', $id)->get();
    $property2 = DB::table('properties')->where('id', $id)->first();
    if ($data != null) {
        foreach ($data as $history) {
            $property = DB::table('properties')->where('id', $history->id_property)->first();
            $reservasi = DB::table('reservations')->where('id', $history->id_reservasi)->first();
            $user = DB::table('users')->where('id', $history->id_user)->first();
            $history->property = $property;
            $history->reservasi = $reservasi;
            $history->user = $user;
        }
    }

    return view('history_pemilik', compact('data', 'property2'));

    
    
});

Route::get('/review/{id}', function ($id) {
    $data = DB::table('reviews')->where('id_property', $id)->first();
    return view('review_add', ['data' => $data]);
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/review_add/{add}', function ($id) {
    $data = DB::table('properties')->where('id', $id)->first();
    return view('review_add', ['data' => $data]);
});

Route::get('/profile', function () {
    $data = User::find(Auth::user()->id);
    return view('profile', ['data' => $data]);
});

Route::get('/list_user', function () {
    $data = DB::table('users')->get();
    return view('user_list', ['data' => $data]);
});

Route::get('/list_gedung', function () {
    $data = DB::table('properties')->get();
    return view('list_property', ['data' => $data]);
});

Route::get('/list_reservasi', function () {
    $data = DB::table('reservations')->get();

    if ($data != null) {
        foreach ($data as $reservation) {
            $property = DB::table('properties')->where('id', $reservation->id_property)->first();
            $user = DB::table('users')->where('id', $reservation->id_user)->first();
            $reservation->property = $property;
            $reservation->user = $user;
        }
    }

    return view('List_reservasi', compact('data'));
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
Route::post('/edit_property/{id}', [PropertyController::class, 'update']);
Route::post('/hapus_akun/{id}', [UserController::class, 'destroy']);
Route::post('/hapus_property/{id}', [PropertyController::class, 'destroy']);
Route::post('/hapus_reservasi/{id}', [ReservationController::class, 'destroy']);