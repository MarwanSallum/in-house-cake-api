<?php

namespace App\Filters;

use Illuminate\Http\Request;

class BaseFilter
{
    protected $filterParms = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

    public function transform(Request $request)
    {
        $eloQuery = [];
        foreach ($this->filterParms as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$parm, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}
