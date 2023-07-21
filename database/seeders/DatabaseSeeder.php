<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Newsletter;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Type;
use App\Models\Collection;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Newsletter::factory(10)->create();
        Tag::factory(15)->create();
        Article::factory(10)->create();
        Collection::factory(20)->create();
        
        $this->call([
            TypeSeeder::class,
            UserSeeder::class
        ]);
        

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
