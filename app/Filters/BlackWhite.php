<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class BlackWhite implements FilterInterface
{
    public function applyFilter(Image $image)
    {
    	$image->gamma(.5);
    	$image->greyscale();
    	$image->contrast(18);
        
        return $image;
    }
}