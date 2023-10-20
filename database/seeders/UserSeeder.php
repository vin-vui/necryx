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
        $user->name = ('Sophie');
        $user->email = ('flavien.sophie@gmail.com');
        $user->password = Hash::make('password');
        $user->type = 'admin';
        $user->save();

        $user = new User;
        $user->name = ('Mia');
        $user->email = ('mgouget@protonmail.com');
        $user->password = Hash::make('testmdp');
        $user->type = 'admin';
        $user->save();

        $user = new User;
        $user->name = ('Ange');
        $user->email = ('angelique.dartevelle03@gmail.com');
        $user->password = Hash::make('test');
        $user->type = 'admin';
        $user->save();

    }
}
