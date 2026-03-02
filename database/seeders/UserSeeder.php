<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_user')->insert([
            [
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Admin Utama',
                'password' => Hash::make('1234')
            ],
            [
                'level_id' => 2,
                'username' => 'kasir1',
                'nama' => 'Kasir Satu',
                'password' => Hash::make('1234')
            ],
            [
                'level_id' => 3,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('1234')
            ],
        ]);
    }
}
