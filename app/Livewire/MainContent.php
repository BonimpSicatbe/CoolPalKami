<?php

namespace App\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class MainContent extends Component
{
    public function getMovies()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/movies');
        $movies = json_decode($response->getBody(), true);
        return $movies['data'] ?? [];
    }

    public function getActors()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/actors');
        $actors = json_decode($response->getBody(), true);
        return $actors['data'] ?? [];
    }

    public function getDirectors()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/directors');
        $directors = json_decode($response->getBody(), true);
        return $directors['data'] ?? [];
    }
    public function getGenres()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/genres');
        $genres = json_decode($response->getBody(), true);
        return $genres['data'] ?? [];
    }

    public function getTickets()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/tickets');
        $tickets = json_decode($response->getBody(), true);
        return $tickets['data'] ?? [];
    }

    public function getReviews()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('http://127.0.0.1:8000/api/v1/reviews');
        $reviews = json_decode($response->getBody(), true);
        return $reviews['data'] ?? [];
    }

    public function render()
    {
        return view('livewire.main-content');
    }
}
