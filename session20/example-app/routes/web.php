<?php

use App\Http\Controllers\Home;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/mohamed',[Home::class,"hi"]);
Route::get("/users",[home::class,"users"]);
Route::get("/register",[home::class,"register"]);
Route::post("/postRegister",[home::class,"postRegister"]);
