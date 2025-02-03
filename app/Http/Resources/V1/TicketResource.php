<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            'userId' => $this->user_id,
            'movieId' => $this->movie_id,
            'showTime' => $this->show_time,

            'movie' => $this->when($request->query('includeAll') || $request->query('includeMovie'), $this->movie),
            'user' => $this->when($request->query('includeAll') || $request->query('includeUser'), $this->user),
        ];
    }
}
