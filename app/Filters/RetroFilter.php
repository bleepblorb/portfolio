<?php

namespace App\Filters;

use Imagick;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class RetroFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {

    	$image->getCore()->modulateImage(100, 90, 100);
    	// $image->contrast(-100);
    	$image->gamma(1.2);
    	$image->filter( new ColorToneFilter('#342447', 80,  false));
    	$image->filter( new ColorToneFilter('#f0f2a4', 20,  true));

    	$gradient = new Imagick();
		$gradient->newPseudoImage($image->width(), $image->height(), 'gradient:white-black');
		$arguments = array(6, -4, 1);
		$gradient->functionImage(Imagick::FUNCTION_POLYNOMIAL, $arguments);
		$gradient->colorizeImage('#ff9e21', .25, true);

		$image->getCore()->compositeImage($gradient, imagick::COMPOSITE_SOFTLIGHT, 0, 0);

    }
}