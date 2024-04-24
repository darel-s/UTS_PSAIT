<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai-mahasiswa', [KuliahController::class, 'getAllNilai']);