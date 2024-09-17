<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $desk = "Ini Tentang Kami";
        $span = [
            "Kami membuat sekte",
            "Kami mempunyai 12 sekte",
            "Kami memiliki lebih dari 1000 pengikut yang puas."
        ];

        return view('welcome', compact('desk', 'span'));
    }
}
