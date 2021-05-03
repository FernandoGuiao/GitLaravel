<?php

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

use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('cadastro');
});

Route::get('/cadastro', function () {
    return view('cadastro');

});

// Route::get('/relatorio', function () {
//     return view('relatorio');
// });

Route::post('/relatorio', 'usercontroller@index');

Route::get('/login', function () {
    return view('login');
});