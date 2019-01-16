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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/data', function () {
//     $json = @file_get_contents('http://localhost/webservice-tugas/public/api/buku', true);

//     $data = json_decode($json);
//     $title = 'Data Buku';

//     return view('databuku', compact('data', 'title'));
// })->name('data.buku');

Route::resource('buku', 'BukuController');

// Route::get('/login')
