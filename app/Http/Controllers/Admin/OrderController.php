<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    public function tableOrder()
    {
        $ordertable = [
            [
                "no_antrian" => "001",
                "nomer_kendaraan" => "S 1223 DS",
                "nama_pemilik" => "Sisca Angraini",
                "nomer_hp" => "08928838828",
                "jenis_kendaraan" => "Fortuner",
                "status" => "Antri"
            ],
            [
                "no_antrian" => "002",
                "nomer_kendaraan" => "L 1189 KO",
                "nama_pemilik" => "Rendi Siregar",
                "nomer_hp" => "08222222",
                "jenis_kendaraan" => "Kijang",
                "status" => "Proses"
            ],
            [
                "no_antrian" => "003",
                "nomer_kendaraan" => "AG 1889 LE",
                "nama_pemilik" => "I Komang",
                "nomer_hp" => "088277377",
                "jenis_kendaraan" => "Civic Turbo",
                "status" => "Complited"
            ]
        ];
        // dd($ordertable);

        return view('admin.order.tableOrder', compact('ordertable'));
    }

    
}
