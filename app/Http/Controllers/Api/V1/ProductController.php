<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ProductFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreProductRequest;
use App\Http\Requests\V1\UpdateProductRequest;
use App\Http\Resources\V1\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $filter = new ProductFilter();
        $filterItems = $filter->transform($request);
        $products = Product::where($filterItems);

        $includeCategory = $request->query('includeCategory');
        $includeBranch = $request->query('includeBranch');

        if($includeCategory)  $products = $products->with('category');
        if($includeBranch)    $products = $products->with('branch');

        return ProductResource::collection($products->paginate()->appends($request->query()));


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StoreProductRequest  $request
     * @return ProductResource
     */
    public function store(StoreProductRequest $request)
    {
        return new ProductResource(Product::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return ProductResource
     */
    public function show(Product $product)
    {
        $includeCategory = request()->query('includeCategory');
        if($includeCategory) return new ProductResource($product->loadMissing('category'));

        return new ProductResource($product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\V1\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        dd($request->all());
        $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
