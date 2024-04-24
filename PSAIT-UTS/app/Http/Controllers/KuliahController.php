<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perkuliahan;

class KuliahController extends Controller
{

    public function getAllNilai()
    {
        return Perkuliahan::with('mahasiswa', 'matakuliah')->get()->map(function ($perkuliahan) {
            return [
                'nim' => $perkuliahan->nim,
                'nama' => $perkuliahan->mahasiswa->nama,
                'alamat' => $perkuliahan->mahasiswa->alamat,
                'tanggal_lahir' => $perkuliahan->mahasiswa->tanggal_lahir,
                'kode_mk' => $perkuliahan->kode_mk,
                'nama_mk' => $perkuliahan->matakuliah->nama_mk,
                'sks' => $perkuliahan->matakuliah->sks,
                'nilai' => $perkuliahan->nilai,
            ];
        });
    }
    
    
}