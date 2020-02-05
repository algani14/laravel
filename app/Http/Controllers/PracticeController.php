<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung";
        return view('latihan', compact('a'));
    }
    public function pass1()
    {
        $data = [
            ['nama'=> 'ucup', 'kelas'=>'Rpl 2'],
            ['nama'=> 'ucip', 'kelas'=>'Rpl 1'],
            ['nama'=> 'ucep', 'kelas'=>'Rpl 3'],
        ];
        return view('latihan1', ['siswa' => $data]);
    }
    public function pass2()
    {
        $data = [
            ['nama' => 'ewok' , 'NIP' => '321432' , 'Jabatan' => 'manager' , 'agama' => 'islam' , 'jk' => 'laki-laki' , 'jam_kerja' => 250],
           ['nama' => 'Al' , 'NIP' => '321442' , 'Jabatan' => 'sektretaris' , 'agama' => 'islam' , 'jk' => 'laki-laki' , 'jam_kerja' => 250],
           ['nama' => 'abang' , 'NIP' => '3213212' , 'Jabatan' => 'staff' , 'agama' => 'islam' , 'jk' => 'laki-laki' , 'jam_kerja' => 250],
        ];
        return view('latihan2', ['pegawai' => $data]);
    }
}
