<?php

namespace App\Supports\MediaLibrary;

use App\Models\Product;
use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class MediaPathGenerator implements PathGenerator
{

    public function getPath(Media $media): string
    {
        switch ($media->model_type){
            case User::class:
                return 'users/'.md5($media->id) . '/';
            case Product::class:
                return 'products/'.md5($media->id) . '/';
            default:
                return md5($media->id);
        }
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'responsive/';
    }
}
