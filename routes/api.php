<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::apiResource('/books', 'BookController');
});

Route::get('external-books/{nameOfBook}', 'BookController@externalBooks');
