<?php

use App\Http\Controllers\CcustomerControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Customer;
use App\Http\Controllers\CastomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
	return view('contact');
});

// Route::resource('customer', CastomerController::class);
// Route::get('/customer', [CastomerController::class, 'index'])->name('customer.index');



// route::get('/about', function(){
// 	return view('pages.about');
// });
// Route::get('/customer', [CcustomerControler::class, 'showCustomer']);
// Route::post('/customer', [CcustomerControler::class, 'store']);


// Route::get('/', [PageController::class, 'home']);
//  Route::get('/about', [PageController::class, 'about']);
 Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);








Route::get('/', fn ()=>  redirect()->route('login'));


Auth::routes(['verify'=>true

]);

Route::middleware(['auth', 'verified'])->group(function(){

Route::resource('customer',CastomerController::class);

Route::get('/home', fn()=>redirect()->route('customer.index'))->name('home');

});