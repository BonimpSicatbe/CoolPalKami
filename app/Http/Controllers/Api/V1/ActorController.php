<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ActorsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;
use App\Http\Resources\V1\ActorCollection;
use App\Http\Resources\V1\ActorResource;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new ActorsFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new ActorCollection(Actor::paginate());
            } else {
                $actor = Actor::where($queryItems)->paginate();
                return new ActorCollection($actor->appends($request->query()));
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
    public function store(StoreActorRequest $request)
    {
        try {
            // Create the actor with validated data
            $actor = Actor::create($request->validated());

            // Update profile_url dynamically if not provided
            if (!$request->filled('profile_url')) {
                $actor->update(['profile_url' => url('actors/' . $actor->id)]);
            }

            return new ActorResource($actor);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while creating the actor.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        try {
            $includeMovies = request()->query('includeMovies');

            if ($includeMovies) {
                $actor->load('movies');
            }

            return new ActorResource($actor);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the actor.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        try {
            $actor->update($request->validated());
            return new ActorResource($actor);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the actor.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        try {
            $actor->delete();
            return response()->json(['message' => 'Actor deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the actor.'], 500);
        }
    }
}
