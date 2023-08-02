<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider = new Slider;
        $slider -> name = 'Maneki';
        $slider -> image = 'public/Maneki.jpg';
        $slider -> description = 'Une photographie de Maneki Neko';
        $slider -> order ='1';
        $slider -> status ='1';
       
        $slider -> save();

        $slider = new Slider;
        $slider -> name = 'Fleurs';
        $slider -> image = 'public/Fleurs.jpg';
        $slider -> description = 'Une photographie de vase rempli de fleurs';
        $slider -> order ='2';
        $slider -> status ='1';
       
        $slider -> save();

        $slider = new Slider;
        $slider -> name = 'Marguerite';
        $slider -> image = 'public/Marguerite.jpg';
        $slider -> description = 'Photographie d\'une marguerite';
        $slider -> order ='3';
        $slider -> status ='1';
       
        $slider -> save();

    }
}
