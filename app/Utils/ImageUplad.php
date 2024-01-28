<?php
namespace App\Utils;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageUplad{
    public static function uploadImage($request, $height=null ,$width=null, $path=null){
        $imageName = time() . '.' . $request->getClientOriginalExtension();
        [$widthDefult, $heightDefult] = getimagesize($request);
        $height = $height ?? $heightDefult;
        $width = $width ?? $widthDefult;
        $image = Image::make($request->path());
        $image->fit($height, $width, function($constraint){
            $constraint->upsize();
        })->stream();
        Storage::disk('public')->put($path.$imageName, $image);
        return 'public/'.$path.$imageName;
    }
}
