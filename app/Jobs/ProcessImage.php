<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Intervention\Image\Facades\Image;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 3;

    /**
     * path Of avatar
     *
     * @var string
     */
    public $path;
    
    /**
    * Create a new job instance.
    * 
    * @return void
    */
    public function __construct(string $path)
    {
        $this->path = $path;
    }
    
    /**
    * Execute the job.
    *
    * @return void
    */
    public function handle()
    {
        $img = Image::make(Storage::disk('public')->path($this->path));
        $img->resize(128, 128, function ($constraint) {
            $constraint->aspectRatio();
        })->save(Storage::disk('public')->path($this->path));
    }
}
