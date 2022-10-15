<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

use App\Http\Controllers\Auth\LoginController;

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
//Auth::routes();

// Homepage
Route::get('/',

    function () {

        // return view
        return view('home');
    }

);


// Login Route

/*
Route::namespace('Auth')->group(function () {

    Route::get('/login', [LoginController::class,'show_login_form'])->name('login');
    Route::post('/login', [LoginController::class,'process_login'])->name('login');
    Route::get('/register', [LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class,'process_signup']);
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');

});
*/

    Route::get('/login', [LoginController::class,'show_login_form'])->name('login');
    Route::post('/login', [LoginController::class,'process_login'])->name('login');
    Route::get('/register', [LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class,'process_signup']);
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');


//show movies page
Route::get('/movies',

    [MoviesController::class, 'showmovie']

);

/* Protected for one */
/*
    Route::get('/movies',
        [MoviesController::class, 'showmovie']
    )->middleware("auth");

*/

// Protected group by middleware
Route::group(["middleware" => ["auth"]], function(){


        //form movies page
        Route::get('/addmovie',

            [MoviesController::class, 'addmovie']

        );

        //add movies page
        Route::post('/savemovie',

            [MoviesController::class, 'savemovie']

        );


 });
