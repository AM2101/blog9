<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    //
    function index(){
        // return "Selamat Datang di API saya";
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('api',["collection"=>$data['data']]);

    }
}
