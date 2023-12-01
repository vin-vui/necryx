<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable =[
        'type_id',
        'name',
        'content',
        'image',
        'players',
        'duration',
        'age',
        'origin',
        'status'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'collections_tags', 'collection_id', 'tag_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

}
