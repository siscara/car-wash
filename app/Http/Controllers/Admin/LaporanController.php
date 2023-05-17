<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $laporantable = [
            [
                "tgl" => "20/05/2023",
                "nomer_kendaraan" => "S 1223 DS",
                "nama_pemilik" => "Sisca Angraini",
                "nomer_hp" => "08928838828",
                "jenis_kendaraan" => "Fortuner",
                "total" => "Rp. 50.000"
            ],
            [
                "tgl" => "20/05/2023",
                "nomer_kendaraan" => "L 1189 KO",
                "nama_pemilik" => "Rendi Siregar",
                "nomer_hp" => "08222222",
                "jenis_kendaraan" => "Kijang",
                "total" => "Rp. 50.000"
            ],
            [
                "tgl" => "20/05/2023",
                "nomer_kendaraan" => "AG 1889 LE",
                "nama_pemilik" => "I Komang",
                "nomer_hp" => "088277377",
                "jenis_kendaraan" => "Civic Turbo",
                "total" => "Rp. 50.000"
            ]
        ];
        return view('admin.laporan.laporan', compact('laporantable'));
    }
}
