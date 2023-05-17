<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tableUser()
    {
        $usertable = [
            [
                "no" => 1,
                "nama" => "Sisca Angraini",
                "email" => "sisca@gmail.com",
                
            ],
            [
                "no" => 2,
                "nama" => "Rendi",
                "email" => "Rendi@gmail.com",
                
            ],
            [
                "no" => 3,
                "nama" => "I Komang",
                "email" => "komang@gmail.com",
                
            ],
            
        ];
        return view('admin.user.tableUser', compact('usertable'));
    }
}
