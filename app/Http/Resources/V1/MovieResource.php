<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'releaseDate' => $this->release_date,
            'duration' => $this->duration,
            'language' => $this->language,
            'country' => $this->country,
            'rating' => $this->rating,
            'posterUrl' => $this->poster_url,
            'trailerUrl' => $this->trailer_url,

            'actors' => $this->when($request->query('includeAll') || $request->query('includeActors'), $this->actors),
            'directors' => $this->when($request->query('includeAll') || $request->query('includeDirectors'), $this->directors),
            'genre' => $this->when($request->query('includeAll') || $request->query('includeGenre'), $this->genres),
            'review' => $this->when($request->query('includeAll') || $request->query('includeReview'), $this->reviews),
            'tickets' => $this->when($request->query('includeAll') || $request->query('includeTickets'), $this->tickets),
        ];
    }
}

