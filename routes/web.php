<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', PessoaController::class);

Route::get('/name', [NameController::class, 'index']);
