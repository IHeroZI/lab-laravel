<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Gate;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize("view-any", Artist::class);
        $artist = Artist::query()->get();
        return view("artists.index", ['artists' => $artist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Artist::class);
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name =  $request->input('name');
        
        if (empty($name)) {
            abort(400);
        }

        $artist = new Artist();
        $artist->name = $name;
        $artist->save();
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', [
            'artist' => $artist,
            'route->name' => "artists.show",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return [
            'artist' => $artist,
            'route->name' => "artists.edit",
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
