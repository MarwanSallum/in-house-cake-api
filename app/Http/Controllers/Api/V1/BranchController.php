<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\BaseFilter;
use App\Filters\V1\BranchFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreBranchRequest;
use App\Http\Requests\V1\UpdateBranchRequest;
use App\Http\Resources\V1\BranchResource;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $filter = new BranchFilter();
        $filterItems = $filter->transform($request);
        $branches = Branch::where($filterItems);

        $includeProducts = $request->query('includeProducts');
        if($includeProducts) $branches = $branches->with('products');

        return BranchResource::collection($branches->paginate()->appends($request->query()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StoreBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return BranchResource
     */
    public function show(Branch $branch)
    {
        return new BranchResource($branch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\V1\UpdateBranchRequest  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
