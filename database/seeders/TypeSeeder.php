<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = new Type;
        $type->name = 'art';
        $type->persona = 'alpha';
        $type->image = '';

        $type->save();

        $type = new Type;
        $type->name = 'jeu';
        $type->persona = 'omega';
        $type->image = '';

        $type->save();

        $type = new Type;
        $type->name = 'concept';
        $type->persona = 'beta';
        $type->image = '';

        $type->save();

    }
}
