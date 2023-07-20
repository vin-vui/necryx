<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'persona',
        'image',
        'description',
        'status',
     ];

     //Définir la relation entre Type et Article (1 à n)

     public function articles() : HasMany
     {
        return $this->hasMany(Article::class);
     }
}
