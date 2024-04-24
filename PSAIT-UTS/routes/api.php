<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiMahasiswaController;



Route::get('/nilai-mahasiswa', [NilaiMahasiswaController::class, 'getAllNilai']);