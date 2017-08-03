<?php

namespace App\Filters;

use Imagick;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class LsdFilter implements FilterInterface
{
    public function applyFilter(Image $image)
    {

    	// $image->getCore()->modulateImage(100, 90, 100);
    	// $image->contrast(100);
    	$image->gamma(1.5);
    	// $image->filter( new ColorToneFilter('#342447', 80,  false));

    	$color = clone $image;
    	$color->fill('#751a0c');

    	$gradient = new Imagick();
		$gradient->newPseudoImage($image->width(), $image->height(), 'gradient:#ff9e21-#38f7ed');
		$arguments = array(2, 2, 1);
		$gradient->functionImage(Imagick::FUNCTION_POLYNOMIAL, $arguments);

		$image->getCore()->compositeImage($color->getCore(), imagick::COMPOSITE_ADD, 0, 0);
		$image->getCore()->compositeImage($gradient, imagick::COMPOSITE_ADD, 0, 0);
    }
}