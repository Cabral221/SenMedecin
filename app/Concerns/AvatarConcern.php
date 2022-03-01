<?php

namespace App\Concerns;

use App\Jobs\ProcessImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait AvatarConcern {

    /**
     * save avatar et prepare le retaille 128*128
     *
     * @param UploadedFile $file
     * @return void
     * @throws \Exception
     */
    public function prepareAvatar($file) : void
    {
        // Delete Old avatar if exist
        if($this->getRawOriginal('avatar') != null) {
            $this->deleteAvatarFile();
        }

        $this->upLoadAvatarFile($file);

        // Resize OnQueue 'IMAGE' avatar et Remplacer le precedant sauvegarder
        ProcessImage::dispatch($this->avatar)->onQueue('image');
        
    }
    
    public function upLoadAvatarFile(UploadedFile $file) : bool
    {
        /** @var string $fileName */
        $fileName = $file->storePublicly('uploads/avatars',['disk' => 'public']);
        return $this->update([
            'avatar' => 'uploads/avatars/' . basename($fileName)
        ]);
    }

    public function deleteAvatarFile() : bool
    {
        return Storage::disk('public')->delete($this->avatar);
    }
    
    public function getAvatarAttribute(string $value = null) : string
    {
        return $value !== null ? $value : 'assets/img/brand/favicon-axxunjurel.svg';
    }

}