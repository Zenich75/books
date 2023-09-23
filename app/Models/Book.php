<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author_id',
        'publisher_id',
        'genre_id',
        'title',
        'price',
        'isbn',
        'published_at',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
