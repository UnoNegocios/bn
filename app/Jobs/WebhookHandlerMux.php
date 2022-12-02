<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\ProcessWebhookJob;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Events\Test;


class WebhookHandlerMux extends SpatieProcessWebhookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->webhookCall['payload'];

        Video::where('asset_id', $data['playback']);

        $test->save();
        broadcast(new Test());
    }
}
