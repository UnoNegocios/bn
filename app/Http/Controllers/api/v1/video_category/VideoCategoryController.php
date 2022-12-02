<?php

namespace App\Http\Controllers\api\v1\video_category;

use App\Http\Requests\StoreVideoCategoryRequest;
use App\Http\Requests\UpdateVideoCategoryRequest;
use App\Models\VideoCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VideoCategory::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoCategory  $videoCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VideoCategory $videoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoCategory  $videoCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoCategory $videoCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoCategoryRequest  $request
     * @param  \App\Models\VideoCategory  $videoCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoCategoryRequest $request, VideoCategory $videoCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoCategory  $videoCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoCategory $videoCategory)
    {
        //
    }
}
