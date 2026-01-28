<?php

namespace App\Models;

use App\Models\Enum\PlaylistAccessibility;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    protected function casts(): array
    {
        return [
            'accessibility' => PlaylistAccessibility::class,
            'create_at' => 'datetime',
        ];
    }

    public function songs() : BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'playlist_song');
    }
}
