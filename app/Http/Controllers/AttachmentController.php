<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AttachmentRequest;

class AttachmentController extends Controller
{
    public function store(AttachmentRequest $request)
    {
        // verifier si attachable id sst bon
        $type = $request->get('attachable_type');
        $id = $request->get('attachable_id');
        $file = $request->file('image');
        // dd($type);
        if(class_exists($type) && method_exists($type,'attachments')){
            $subject = call_user_func($type . '::find',$id);
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
