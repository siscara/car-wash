<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function tableLayanan()
    {
        $layanantable = [
            [
                "nama_layanan" => "Cuci Mobil Manual",
                "harga" => "Rp.50.000",
                "foto" => "cmb1.jpg",
                
                
            ],
            [
                "nama_layanan" => "Cuci Mobil waterlwss",
                "harga" => "Rp.50.000",
                "foto" => "cmb2.jpg",
                
            ],
            [
                "nama_layanan" => "Cuci Mobil Touchless",
                "harga" => "Rp.50.000",
                "foto" => "cmb3.jpg",
            ],
            [
                "nama_layanan" => "Cuci Mobil Hidrolik",
                "harga" => "Rp.50.000",
                "foto" => "cmb4.jpg",
            ]
        ];
        return view('admin.layanan.tablelayanan', compact('layanantable'));
    }
}
