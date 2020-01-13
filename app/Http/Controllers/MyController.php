<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Hay()
    {
        return "halo dunia";
    }
    public function nama()
    {
        return "perkenalkan";
    }
    public function saya()
    {
        return "nama saya";
    }
    public function adalah()
    {
        return "adalah";
    }
    public function muhammad()
    {
        return "Muhammad";
    }
    public function alghani()
    {
        return "Alghani";
    }
    public function halo()
    {
        return "halo dunia";
    }
    public function aku()
    {
        return "aku";
    }
    public function adalah1()
    {
        return "adalah";
    }
    public function manusia()
    {
        return "manusia";
    }
    public function kucing($warna=null)
    {
        if ($warna) {
          return "warna kucing kamu " .$warna ;
        }


        if (!$warna) {
            return "tidak ada warna";
        }
    }

    public function beli($a=null , $ukuran=null)
    {
        if ($a) {
            echo "anda beli ".$a;
        }
        if (!$a && !$ukuran) {
            echo "silahkan pesan item terlebih dahulu";
        }
        if (isset($ukuran)) {


        if ($ukuran >= 15000) {
            echo " dengan ukuran jumbo";
        }
        if ($ukuran < 15000 && $ukuran>=7500) {
            echo " dengan ukuran meduim";
        }
        if ($ukuran < 7500) {
            echo " dengan ukuran small";
        }
    }
    }
}
