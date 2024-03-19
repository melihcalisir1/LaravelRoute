<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function index(){
        return view('anasayfa');
    }

    public function homePage(){
        return view('anasayfa');
    }

    public function hakkimizda(){
        $name = "Melih";
        $surname  = "Çalışır";
        $age = 21;
        return view('hakkimizda',compact('name','surname','age'));
    }

    public function cv(){
        $fakulte = "Teknoloji Fakültesi";
        $bolum = "Yazılım Mühendisliği";
        $sinif=2;
        return view('cv',compact('fakulte','bolum','sinif'));
    }

    public function iletisim(){
        $tel=5323412;
        return view('iletisim',compact('tel'));
    }


}
