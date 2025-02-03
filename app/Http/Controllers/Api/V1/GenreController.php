<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\GenresFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Http\Resources\V1\GenreCollection;
use App\Http\Resources\V1\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new GenresFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new GenreCollection(Genre::paginate());
            } else {
                $genre = Genre::where($queryItems)->paginate();
                return new GenreCollection($genre->appends($request->query()));
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
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
    public function store(StoreGenreRequest $request)
    {
        try {
            $genre = Genre::create($request->validated());
            return new GenreResource($genre);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the genre.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        try {
            $includeMovies = request()->query('includeMovies');

            if ($includeMovies) {
                $genre->load('movies');
            }

            return new GenreResource($genre);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the genre.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        try {
            $genre->update($request->validated());
            return new GenreResource($genre);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the genre.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        try {
            $genre->delete();
            return response()->json(['message' => 'Genre deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the genre.'], 500);
        }
    }
}
