<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teskabeh extends Controller
{
    public function index(){
        $name = "mozuu";

        return view('my-app', [
            "me" => $name
        ]);
    }
}
