<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class FavoritesFilter extends ApiFilter
{
    protected $safeParams = [
        'user_id' => ['eq'],
        'movie_id' => ['eq'],
    ];

    protected $columnMap = [
        'userId' => 'user_id',
        'movieId' => 'movie_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}
