<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TicketsFilter extends ApiFilter
{
    protected $safeParams = [
        'user_id' => ['eq', 'ne'],
        'movie_id' => ['eq', 'ne'],
        'seat_number' => ['eq', 'ne', 'lt', 'gt', 'gte', 'lte'],
        'show_time' => ['eq', 'ne', 'lt', 'gt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'userId' => 'user_id',
        'movieId' => 'movie_id',
        'seatNumber' => 'seat_number',
        'showTime' => 'show_time',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'gt' => '>',
        'gte' => '>=',
        'lte' => '<=',
    ];
}
