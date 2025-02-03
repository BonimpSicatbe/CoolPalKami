<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class DirectorsFilter extends ApiFilter
{
    protected $safeParams = [
        'name' => ['eq'],
        'birth_date' => ['eq'],
        'profile_url' => ['eq'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'birthDate' => 'birth_date',
        'profileUrl' => 'profile_url',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}
