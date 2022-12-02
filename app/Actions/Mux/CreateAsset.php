<?php

namespace App\Actions\Mux;

use Illuminate\Support\Facades\Http;
use App\Models\Video;

class CreateAsset{

    public static function create(Video $video){
        $response = Http::withBasicAuth(config('mux.access_token_id'), config('mux.secret_key'))->post('https://api.mux.com/video/v1/assets/',[
            'input' => $video->file_path,
            'playback_policy'=>  ['public']
        ]);


        $playback_id = $response->json()['data']['playback_ids'][0]['id'];
            //$video = Video::findOrFail($video_id);
            $video->update([
                'playback_id' => $playback_id,
                'status' => 'preparing'
            ]);

        return $video;
    }
}
