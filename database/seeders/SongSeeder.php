<?php

namespace Database\Seeders;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $artist = Artist::get();
        foreach ($artist as $artist) {
            $count = fake()->numberBetween(1, 10);
            Song::factory()->count($count)->create([
                'artist_id' => $artist->id,
            ]);
        }
    }
}