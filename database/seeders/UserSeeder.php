<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = ('Alix');
        $user->email = ('necryx.tech@gmail.com');
        $user->password = Hash::make('password');
        $user->type = 'admin';
        $user->save();
    }
}
