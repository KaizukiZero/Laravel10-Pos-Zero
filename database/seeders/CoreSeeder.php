<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_admins')->insert([
            'username' => "root",
            'password' => Hash::make('Zero'),
            'class' => 1,
            'permissions' => json_encode(['root','import','export']),
            'created_at' => now(),
        ]);
    }
}
