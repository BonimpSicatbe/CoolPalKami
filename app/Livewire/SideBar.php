<?php

namespace App\Livewire;

use Livewire\Component;

class SideBar extends Component
{

    public $menuItems = [
        [
          'title' => 'Introduction',
          'id' => 'introduction',
          'subItems' => [
              'Overview' => 'overview',
              'Getting Started' => 'getting-started',
              // 'Authentication and Authorization' => 'authentication-and-authorization',
          ]
      ],
      [
          'title' => 'Movies API',
          'id' => 'movies-api',
          'subItems' => [
              'Description' => 'movies-description',
              'Base URL' => 'movies-base-url',
              'Endpoints' => 'movies-endpoints',
              // 'Authentication and Authorization' => 'movies-auth',
              'Parameters' => 'movies-parameters',
              'Format Type' => 'movies-format',
              'Properties with description' => 'movies-properties',
              'Request' => 'movies-request',
              'Response' => 'movies-response',
              'Errors' => 'movies-errors',
          ]
      ],
      [
        'title' => 'Actors API',
        'id' => 'actors-api',
        'subItems' => [
            'Description' => 'actors-description',
            'Base URL' => 'actors-base-url',
            'Endpoints' => 'actors-endpoints',
            // 'Authentication and Authorization' => 'actors-auth',
            'Parameters' => 'actors-parameters',
            'Format Type' => 'actors-format',
            'Properties with description' => 'actors-properties',
            'Request' => 'actors-request',
            'Response' => 'actors-response',
            'Errors' => 'actors-errors',
        ],
      ],
      [
        'title' => 'Directors API',
        'id' => 'directors-api',
        'subItems' => [
            'Description' => 'directors-description',
            'Base URL' => 'directors-base-url',
            'Endpoints' => 'directors-endpoints',
            // 'Authentication and Authorization' => 'directors-auth',
            'Parameters' => 'directors-parameters',
            'Format Type' => 'directors-format',
            'Properties with description' => 'directors-properties',
            'Request' => 'directors-request',
            'Response' => 'directors-response',
            'Errors' => 'directors-errors',
        ]
      ],
      [
        'title' => 'Genre API',
        'id' => 'genre-api',
        'subItems' => [
            'Description' => 'genre-description',
            'Base URL' => 'genre-base-url',
            'Endpoints' => 'genre-endpoints',
            // 'Authentication and Authorization' => 'genre-auth',
            'Parameters' => 'genre-parameters',
            'Format Type' => 'genre-format',
            'Properties with description' => 'genre-properties',
            'Request' => 'genre-request',
            'Response' => 'genre-response',
            'Errors' => 'genre-errors',
        ]
      ],
      [
        'title' => 'Ticket API',
        'id' => 'ticket-api',
        'subItems' => [
            'Description' => 'ticket-description',
            'Base URL' => 'ticket-base-url',
            'Endpoints' => 'ticket-endpoints',
            // 'Authentication and Authorization' => 'ticket-auth',
            'Parameters' => 'ticket-parameters',
            'Format Type' => 'ticket-format',
            'Properties with description' => 'ticket-properties',
            'Request' => 'ticket-request',
            'Response' => 'ticket-response',
            'Errors' => 'ticket-errors',
        ]
      ],
      [
        'title' => 'Review API',
        'id' => 'review-api',
        'subItems' => [
            'Description' => 'review-description',
            'Base URL' => 'review-base-url',
            'Endpoints' => 'review-endpoints',
            // 'Authentication and Authorization' => 'review-auth',
            'Parameters' => 'review-parameters',
            'Format Type' => 'review-format',
            'Properties with description' => 'review-properties',
            'Request' => 'review-request',
            'Response' => 'review-response',
            'Errors' => 'review-errors',
        ]
      ],
   ];
    public function render()
    {
        return view('livewire.side-bar');
    }
}
