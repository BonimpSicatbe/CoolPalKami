<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class GenresFilter extends ApiFilter
{
    protected $safeParams = [
        'name' => ['eq'],
        'description' => ['eq'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'description' => 'description',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}
