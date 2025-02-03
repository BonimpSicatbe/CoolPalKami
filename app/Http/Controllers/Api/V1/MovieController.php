<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\MoviesFilter;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\V1\MovieResource;
use App\Http\Resources\V1\MovieCollection;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new MoviesFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new MovieCollection(Movie::paginate());
            } else {
                $movie = Movie::where($queryItems)->paginate();
                return new MovieCollection($movie->appends($request->query()));
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
        // Not implemented
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        try {
            $movie = Movie::create($request->validated());
            return new MovieResource($movie);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while storing the movie.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        try {
            $includeActors = request()->query('includeActors');
            $includeDirectors = request()->query('includeDirectors');
            $includeGenre = request()->query('includeGenre');
            $includeReview = request()->query('includeReview');
            $includeTickets = request()->query('includeTickets');
            $includeAll = request()->query('includeAll');

            if ($includeAll) {
                $movie->load(['actors', 'directors', 'genres', 'reviews', 'tickets']);
            } else {
                if ($includeActors) {
                    $movie->load('actors');
                }
                if ($includeDirectors) {
                    $movie->load('directors');
                }
                if ($includeGenre) {
                    $movie->load('genres');
                }
                if ($includeReview) {
                    $movie->load('reviews');
                }
                if ($includeTickets) {
                    $movie->load('tickets');
                }
            }

            return new MovieResource($movie);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the movie.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        // Not implemented
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        try {
            $movie->update($request->validated());
            return new MovieResource($movie);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the movie.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        try {
            $movie->delete();
            return response()->json(['message' => 'Movie deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the movie.'], 500);
        }
    }
}
