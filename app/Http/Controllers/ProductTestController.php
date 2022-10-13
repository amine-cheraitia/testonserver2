<?php

namespace App\Http\Controllers;

use App\Models\ProductTest;
use App\Http\Requests\StoreProductTestRequest;
use App\Http\Requests\UpdateProductTestRequest;

class ProductTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ProductTest::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductTestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductTestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductTest  $productTest
     * @return \Illuminate\Http\Response
     */
    public function show(ProductTest $productTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductTestRequest  $request
     * @param  \App\Models\ProductTest  $productTest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductTestRequest $request, ProductTest $productTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTest  $productTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductTest $productTest)
    {
        //
    }
}