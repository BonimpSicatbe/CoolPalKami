<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActorResource extends JsonResource
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
            'name' => $this->name,
            'birthDate' => $this->birth_date,
            'biography' => $this->biography,
            'profileUrl' => $this->profile_url,

            'movies' => $this->when((bool) $request->query('includeMovies'), $this->movies),
        ];
    }
}
