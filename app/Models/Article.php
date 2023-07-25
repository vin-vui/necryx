<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title',
        'content',
        'image',
        'description',
        'status',
    ];

    // / Définir la relation entre Article et Type (n à 1)
 
    public function types(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
