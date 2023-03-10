<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name'=> 'Dinda',
                'password'=>bcrypt('dinda123'),
                'email'=> 'dinda@gmail.com',
                'hak_akses'=> 'user',
            ],

            [
                'name'=> 'Kire',
                'password'=>bcrypt('ega12345'),
                'email'=> 'kire@gmail.com',
                'hak_akses'=> 'admin',
                
            ],
        ];
        foreach($users as $key => $value){
            User::create($value);
        }
    }
}
