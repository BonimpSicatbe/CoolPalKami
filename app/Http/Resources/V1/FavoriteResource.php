<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'userId' => $this->user_id,
            'movieId' => $this->movie_id,

            'movie' => $this->when($request->query('includeAll') || $request->query('includeMovie'), $this->movie),
            'user' => $this->when($request->query('includeAll') || $request->query('includeUser'), $this->user),
        ];
    }
}
