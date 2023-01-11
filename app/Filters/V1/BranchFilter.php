<?php

namespace App\Filters\V1;

use App\Filters\BaseFilter;

class BranchFilter extends BaseFilter
{
    protected $filterParms = [
        'city' => ['eq'],
        'settings.working_days.sa' => ['eq', 'ne'],
        'status' => ['eq'],
    ];
}
