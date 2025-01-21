<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main() {
        return view('mainv2');
    }

    public function contact() {
        return view('contact');
    }

    public function docs() {
        return view('docs');
    }


}
