<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'movieId' => $this->movie_id,
            'userId' => $this->user_id,
            'rating' => $this->rating,
            'comment' => $this->comment,

            'movie' => $this->when($request->query('includeAll') || $request->query('includeMovie'), $this->movie),
            'user' => $this->when($request->query('includeAll') || $request->query('includeUser'), $this->user),
        ];
    }
}
