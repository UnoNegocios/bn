<?php

namespace App\Http\Controllers\api\v1\video;

use App\Http\Requests\video\StoreVideoRequest;
use App\Http\Requests\video\UpdateVideoRequest;
use App\Models\Video;
use App\Http\Filters\video\VideoFilter;
use App\Http\Resources\VideoResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\Mux\CreateAsset;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, VideoFilter $videoFilter)
    {
        return $videoFilter->execute($request);
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
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        $validated = $request->validated();
        
        $video = Video::create($validated);
        $asset = CreateAsset::create($video);
 
        return $asset;

        //return response(null, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return new VideoResource($video);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $validated = $request->validated();
        $video->update($validated);
        return response(null, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return response(null, 204);
    }

    public function files(Request $request ){
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        $filePath = config('mux.base_url').'files/'.$fileName;
        $request->file->move(public_path('../public/files'), $fileName);
        
        
        return response()->json(['file' => $fileName, 'file_path' => $filePath]);
    }  
}
