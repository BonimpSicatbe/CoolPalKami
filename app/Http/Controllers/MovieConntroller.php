<?php

namespace App\Http\Controllers;

use App\Http\Resources\V1\MovieCollection;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = new MovieCollection(Movie::paginate());
        // return MovieResource::collection($movies);

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
