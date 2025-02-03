<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\FavoritesFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Http\Resources\V1\FavoriteResource;
use App\Http\Resources\V1\FavoriteCollection;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new FavoritesFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new FavoriteCollection(Favorite::paginate());
            } else {
                $favorite = Favorite::where($queryItems)->paginate();
                return new FavoriteCollection($favorite->appends($request->query()));
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
    public function store(StoreFavoriteRequest $request)
    {
        try {
            $favorite = Favorite::create($request->validated());
            return new FavoriteResource($favorite);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the favorite.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        try {
            $includeMovie = request()->query('includeMovie');
            $includeUser = request()->query('includeUser');
            $includeAll = request()->query('includeAll');

            if ($includeAll) {
                $favorite->load(['movie', 'user']);
            } else {
                if ($includeMovie) {
                    $favorite->load('movie');
                }
                if ($includeUser) {
                    $favorite->load('user');
                }
            }

            return new FavoriteResource($favorite);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the favorite.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        try {
            $favorite->update($request->validated());
            return new FavoriteResource($favorite);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the favorite.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $favorite)
    {
        try {
            $favorite->delete();
            return response()->json(['message' => 'Favorite deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the favorite.'], 500);
        }
    }
}
