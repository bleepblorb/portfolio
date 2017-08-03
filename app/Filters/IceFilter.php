<?php

namespace App\Filters;

use Imagick;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class IceFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {
    	$image->getCore()->modulateImage(100, 60, 100);
    	$image->gamma(.9);
    	$image->filter( new ColorToneFilter('#3c1149', 70,  false));
    	// $image->filter( new ColorToneFilter('#d3f3ff', 80,  true));
    	$image->filter( new ColorToneFilter('#a9fcf9', 90,  true));
    	$image->brightness(5);
    }
}