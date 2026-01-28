<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use SoftDeletes,hasFactory;

    protected $fillable = [
        'title', 'artist_id', 'duration',
    ];

    public function artist() : BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }
}
