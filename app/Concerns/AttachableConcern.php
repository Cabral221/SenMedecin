<?php

namespace App\Concerns;

use App\Models\Attachment;


trait AttachableConcern {

    public static function bootAttachableConcern()
    {
        self::deleted(function ($subject){
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

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}