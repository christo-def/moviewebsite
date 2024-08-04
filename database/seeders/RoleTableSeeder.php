<?php
// seeder ini untuk menentukan role 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //jangan lupa import jika pake spatie

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']); //membuat role baru
        Role::create(['name' => 'user']);
    }
}
