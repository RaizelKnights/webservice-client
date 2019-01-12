<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', function (Request $request) {
    $http = new Client();

    $response = $http->post('http://localhost/webservice-tugas/public/api/login', [
        'form_params' => [
          'grant_type' => 'password',
          'email' => $request->email,
          'password' => $request->password,
        ],
      ]);

    return json_decode((string) $response->getBody(), true);
});

Route::get('/user', function (Request $request) {
    $http = new Client();
    $response = $http->get('http://localhost/webservice-tugas/public/api/user', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => $request->header('Authorization'),
        ],
    ]);

    return json_decode((string) $response->getBody(), true);
});
Route::get('/buku', function () {
    $client = new Client([
            'headers' => [
                'content-type' => 'application/json',
                'Accept' => 'application/json',
            ],
            ]);

    $response = $client->request('GET', 'http://localhost/webservice-tugas/public/api/buku');

    return $response->getBody()->getContents();
})->name('api.buku');
