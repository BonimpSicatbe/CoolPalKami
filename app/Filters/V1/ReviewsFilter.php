<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ReviewsFilter extends ApiFilter
{
    protected $safeParams = [
        'movie_id' => ['eq'],
        'user_id' => ['eq'],
        'rating' => ['eq', 'ne', 'lt', 'gt', 'gte', 'lte'],
        'comment' => ['eq'],
    ];

    protected $columnMap = [
        'movieId' => 'movie_id',
        'userId' => 'user_id',
        'rating' => 'rating',
        'comment' => 'comment',
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
