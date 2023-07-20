<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Newsletter;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Type;


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
        
        $this->call([
            TypeSeeder::class,
        ]);
        

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
