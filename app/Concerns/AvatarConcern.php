<?php

namespace App\Concerns;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

trait AvatarConcern {

    /**
     * save avatar et prepare le retaille 128*128
     *
     * @param UploadedFile $file
     * @return boolean
     * @throws \Exception
     */
    public function prepareAvatar($file) : bool
    {
        // Delete Old avatar if exist
        if($this->getRawOriginal('avatar') != null) {
            $this->deleteAvatarFile();
        }

        $this->upLoadAvatarFile($file);
        // Resize avatar et Remplacer le precedant sauvegarder
        try {
            $img = Image::make(Storage::disk('public')->path($this->avatar));
            $img->resize(128, 128, function ($constraint) {
                $constraint->aspectRatio();
            })->save(Storage::disk('public')->path($this->avatar));
            return true;
        } catch (\Exception $th) {
            // dd($th);
            // TODO:...
            abort(500);
        }
        // Resize with QUEU 'Image'
        // TODO:...
        
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