<?php

namespace App\Classes;

use Intervention\Image\Facades\Image;

class SaveImage
{
    public function save($image, $image_name, $folder) : string|null
    {
        if ($image) {
            $name = $image_name . "." . $image->extension();
            $img = Image::make($image)->resize(300, 150, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $upload_path = 'uploads/' . $folder . '/';
            $image_url = $upload_path . $name;
            $img->save($image_url);
            return '/' . $image_url;
        }
        return null;
    }
}
