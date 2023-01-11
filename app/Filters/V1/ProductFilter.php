<?php

namespace App\Filters\V1;

use App\Filters\BaseFilter;
use Illuminate\Http\Request;

class ProductFilter extends BaseFilter {
    protected $filterParms = [
        'name' => ['eq'],
        'status' => ['eq', 'ne'],
        'price' => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];
}
