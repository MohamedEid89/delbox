// app/Traits/ImageUploadTrait.php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait
{
    public function uploadImage($image, $folder)
    {
        $path = $image->store($folder, 'public');
        return $path;
    }

    public function deleteImage($path)
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }


    public function uploadMultipleImages($images, $folder)
{
    $paths = [];
    foreach ($images as $image) {
        $paths[] = $this->uploadImage($image, $folder);
    }
    return $paths;
}
}