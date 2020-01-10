<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['nama'=>'ewok', 'jabatan'=>'manager' , 'jk'=>'laki' , 'alamat'=>'rancamanyar' , 'agama' => 'islam' , 'total_gaji' => '2juta'],
        ['nama'=>'al', 'jabatan'=>'staff' , 'jk'=>'laki' , 'alamat'=>'rancamanyar' , 'agama' => 'islam' , 'total_gaji' => '5juta'],
        ['nama'=>'anwar', 'jabatan'=>'ob' , 'jk'=>'laki' , 'alamat'=>'kopo' , 'agama' => 'islam' , 'total_gaji' => '3juta'],
        ['nama'=>'gea', 'jabatan'=>'staff' , 'jk'=>'perempuan' , 'alamat'=>'rancamanyar' , 'agama' => 'islam' , 'total_gaji' => '5juta'],
        ['nama'=>'ozan', 'jabatan'=>'staff' , 'jk'=>'laki' , 'alamat'=>'laswi' , 'agama' => 'islam' , 'total_gaji' => '4juta'],
        ];
        // masukkan data ke database
        DB::table('penggajians')->insert($posts);
    }
}
