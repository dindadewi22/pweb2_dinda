<?php

namespace Database\Seeders;
use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tb_mahasiswa=[
            [
                'nama'=>'Dinda Dewi',
                'kelas'=>'TI 2B',
                'jurusan'=>'Teknik Informatika',
            ],
            [
                'nama'=>'Kirei',
                'kelas'=>'TI 2B',
                'jurusan'=>'Teknik Informatika',
            ],
            [
                'nama'=>'Cabay DWi',
                'kelas'=>'TI 2B',
                'jurusan'=>'Teknik Informatika',
            ],
            [
                'nama'=>'Nur Azizah',
                'kelas'=>'TI 3B',
                'jurusan'=>'Teknik Informatika',
            ],
            [
                'nama'=>'Ega Nurriana',
                'kelas'=>'TI 2B',
                'jurusan'=>'Teknik Informatika',
            ],
            [
                'nama'=>'Galang W',
                'kelas'=>'TI 3B',
                'jurusan'=>'Teknik Informatika',
            ] 
        ];

        foreach($tb_mahasiswa as $key => $value){
            mahasiswa::create($value);
        }
    }
}
