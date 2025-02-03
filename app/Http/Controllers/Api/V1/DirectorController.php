<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\DirectorsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use App\Http\Resources\V1\DirectorCollection;
use App\Http\Resources\V1\DirectorResource;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new DirectorsFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new DirectorCollection(Director::paginate());
            } else {
                $director = Director::where($queryItems)->paginate();
                return new DirectorCollection($director->appends($request->query()));
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
    public function store(StoreDirectorRequest $request)
    {
        try {
            // Create the director with validated data
            $director = Director::create($request->validated());

            // Update profile_url dynamically if not provided
            if (!$request->filled('profile_url')) {
                $director->update(['profile_url' => url('directors/' . $director->id)]);
            }

            return new DirectorResource($director);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while creating the director.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        try {
            $includeMovies = request()->query('includeMovies');

            if ($includeMovies) {
                $director->load('movies');
            }

            return new DirectorResource($director);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the director.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
        try {
            $director->update($request->validated());
            return new DirectorResource($director);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the director.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        try {
            $director->delete();
            return response()->json(['message' => 'Director deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the director.'], 500);
        }
    }
}
