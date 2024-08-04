<?php
//seeder ini diguanakan user 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void // tempat menulis kode untuk menambahkan data  (seeder )ke database.
    {
        $admin = User::create ([
            'name'=>'Admin',
            'email'=>'admin123@gmail.com',
            'password'=> bcrypt('password'),
        ]);
        $admin->assignRole('admin'); //cara assign akun admin agar memiliki role admin
    }
}
