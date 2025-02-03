<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ReviewsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Http\Resources\V1\ReviewCollection;
use App\Http\Resources\V1\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new ReviewsFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new ReviewCollection(Review::paginate());
            } else {
                $review = Review::where($queryItems)->paginate();
                return new ReviewCollection($review->appends($request->query()));
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
    public function store(StoreReviewRequest $request)
    {
        try {
            $review = Review::create($request->validated());
            return new ReviewResource($review);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the review.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        try {
            $includeMovie = request()->query('includeMovie');
            $includeUser = request()->query('includeUser');
            $includeAll = request()->query('includeAll');

            if ($includeAll) {
                $review->load(['movie', 'user']);
            } else {
                if ($includeMovie) {
                    $review->load('movie');
                }
                if ($includeUser) {
                    $review->load('user');
                }
            }

            return new ReviewResource($review);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the review.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        try {
            $review->update($request->validated());
            return new ReviewResource($review);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the review.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        try {
            $review->delete();
            return response()->json(['message' => 'Review deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the review.'], 500);
        }
    }
}
