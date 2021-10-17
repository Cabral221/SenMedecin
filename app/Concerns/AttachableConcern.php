<?php

namespace App\Concerns;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait AttachableConcern {

    public static function bootAttachableConcern() : void
    {
        self::deleted(function ($subject){
            // dd($subject->attachments()->get());
            foreach ($subject->attachments()->get() as $attachment) {
                $attachment->deleteFile();
            }
            $subject->attachments()->delete();
        });

        self::updating(function($subject){
            if($subject->content != $subject->getOriginal('content')){
                if(preg_match_all('/src="([^"]+)"/', $subject->content, $matches) > 0){
                    $images = array_map(function($match){
                        return basename($match);
                    }, $matches[1]);
                    $attachments = $subject->attachments()->whereNotIn('name',$images);
                }else{
                    $attachments = $subject->attachments();
                }
                foreach ($attachments->get() as $attachment) {
                    $attachment->deleteFile();
                }
                $attachments->delete();
            }
        });
    }

    public function attachments() : MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}