<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($id){
        return "hello {$id}";
    }

    function getData(Request $req){
        return $req->input() ;
    }
}
