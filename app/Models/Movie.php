<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    protected $fillable = ['title', 'genre_id', 'rating', 'year', 'is_available'];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
            'is_available' => 'boolean',
            'rating' => 'decimal:1',
        ];
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

}