<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\AttachmentRequest;

class AttachmentController extends Controller
{
   
    public function store(AttachmentRequest $request) : object
    {
        // verifier si attachable id sst bon
        /** @var string $type */
        $type = $request->get('attachable_type');
        /** @var int $id */
        $id = $request->get('attachable_id');
        /** @var UploadedFile $file */
        $file = $request->file('image');

        if(class_exists($type) && method_exists($type,'attachments')){
            /** @var callable $callable */
            $callable = $type . '::find';
            $subject = call_user_func($callable, $id);
            if($subject){
                $attachment = new Attachment($request->only('attachable_type','attachable_id'));
                $attachment->uploadFile($file);
                $attachment->save();
                return $attachment;
            }else {
                return new JsonResponse(['attachable_id' => 'Erreur sujet non trouvé : Ce contenu ne peut pas recevoir de fichiers attachés'],422);
            }
        }else{
            return new JsonResponse(['attachable_type' => 'Ce contenu ne peut pas recevoir de fichiers attachés'],422);
        }
    }
        
}
