<?php

namespace App\Traits;

trait ImageTrait
{
    public function verifyAndUpload($image, $path = 'images')
    {
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path($path), $imageName);

        $fullPath = asset($path.'/'.$imageName);
        return $fullPath;
    }
}



