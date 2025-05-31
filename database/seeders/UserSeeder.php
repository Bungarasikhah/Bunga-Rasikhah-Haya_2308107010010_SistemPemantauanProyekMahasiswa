<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Bunga Rasikhah Haya',
            'npm' => '2308107010010',
            'password' => Hash::make('27398651'),
        ]);
    }
}
