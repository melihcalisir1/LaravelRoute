<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Deneme_1Controller extends Controller
{
    public function index()
    {
        $name = "sabri";
        $secondname="demir";
        return view('dosya1.text2',compact('name','secondname'));
    }

}
