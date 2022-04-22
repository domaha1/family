<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;

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
//Get
// Route::get('/home', [FamilyController::class,'index'])->name('home.index');
// Route::get('home/{id}', [FamilyController::class, 'show'])->name('home.show');
// //Route::get('home/{name}', [FamilyController::class, 'show'])->where('name', "[أ-ي]+");

// //POST
// Route::get('home/create', [FamilyController::class, 'create']);
// Route::post('home', [FamilyController::class, 'store']);

// //PUT OR PATCH
// Route::get('home/edit/{id}', [FamilyController::class, 'edit']);
// Route::patch('home/{id}', [FamilyController::class, 'update']);

// //delete
// Route::delete('home/{id}', [FamilyController::class, 'destroy']);



Route::get('/', function () {
    return view('welcome');
});

// Route::resource('home',FamilyController::class);
// //multiple Http verbs


//Route::match(['GET', 'POST'] , 'home' , [FamilyController::class, 'index']);
//Route::view('home','home.index',['name'=> 'yousef al domaha']);

Route::group(['prefix' => '/home'], function () {


    //Route::get('index', 'FamilyController@index');
    Route::get('/', [FamilyController::class,'index'])->name('home.index');
    Route::get('show/{id}', [FamilyController::class, 'show'])->name('home.show');
    Route::get('login',function () {
        return ' you should be enter by user and pass';
    })->name('login');
});




//Route::get('/home','FamilyController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
