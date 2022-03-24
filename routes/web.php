<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie;

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

Route::get('/dashboard', function () {
    $count = Movie::all()->count();
    $trailer = Movie::all()->random(1);

    if      ($count <= 0){}
    else if ($count < 4){
        $collection1 = Movie::all()->random($count);
        $collection2 = Movie::all()->random($count);
        $collection3 = Movie::all()->random($count);
    }
    else{
        $collection1 = Movie::all()->random(4);
        $collection2 = Movie::all()->random(4);
        $collection3 = Movie::all()->random(4);
    }
    return view('dashboard', [
        "collection1"   =>  $collection1,
        "collection2"   =>  $collection2,
        "collection3"   =>  $collection3,
        "trailer"       =>  $trailer
    ]);
    
})->middleware(['auth'])->name('dashboard');

Route::resource('movie', MovieController::class);

Route::post('user-profile', [MovieController::class, 'get_account_info'])->name('user-profile');

Route::get('movies',        [MovieController::class, 'movies'])->name('movies');

Route::get('add-movie',     [MovieController::class, 'create']);

Route::post('add-movie',    [MovieController::class, 'store']);

Route::get('movie/{id}/detail', function($id) {
    $movie = Movie::find($id);
    return view('movie-detail', ["movie"=>$movie]);
});

require __DIR__.'/auth.php';