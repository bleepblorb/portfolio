<?php

namespace App\Filters;

use Imagick;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class GlossFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {

    	$image->getCore()->modulateImage(100, 150, 100);
        $image->gamma(.8);
    	$image->contrast(10);
    }
}