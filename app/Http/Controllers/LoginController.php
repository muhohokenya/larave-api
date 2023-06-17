<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return \response()->json([
            "sucess"=>true
        ]);
    }
}
