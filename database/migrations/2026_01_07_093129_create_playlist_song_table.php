<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Song;
use App\Models\Playlist;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('playlist_song', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Playlist::class)->constrained('playlists'); //playlist_id
            $table->foreignIdFor(Song::class)->constrained('songs'); //song
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_song');
    }
};
