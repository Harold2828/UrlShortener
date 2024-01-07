<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreUrlMapRequest;
use App\Http\Requests\UpdateUrlMapRequest;
use App\Models\UrlMap;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UrlMapResource;
use App\Http\Resources\V1\UrlMapCollection;

class UrlMapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UrlMapCollection(UrlMap::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUrlMapRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UrlMap $urlMap)
    {
        return new UrlMapResource($urlMap);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UrlMap $urlMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUrlMapRequest $request, UrlMap $urlMap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UrlMap $urlMap)
    {
        //
    }
}
