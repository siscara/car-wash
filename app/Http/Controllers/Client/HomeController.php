<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $ordertable = [
            [
                "no_antrian" => "001",
                "nomer_kendaraan" => "S 1223 DS",
                "nama_pemilik" => "Sisca Angraini",
                "nomer_hp" => "08928838828",
                "jenis_kendaraan" => "Fortuner",
                "total" => "Rp. 50.000",
                "status" => "Antri"
            ],
           
        ];

        return view('client.home.home', compact('ordertable'));
    }
}
