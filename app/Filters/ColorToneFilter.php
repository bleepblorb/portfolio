<?php

namespace App\Filters;

use Imagick;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;


class ColorToneFilter implements FilterInterface
{

    private $color;
    private $level;
    private $negate;

    public function __construct($color, $level, $negate = false)
    {
        $this->color = $color;
        $this->level = $level;
        $this->negate = $negate;
    }


    public function applyFilter(Image $image)
    {
        $temp1 = clone $image;
        $gray = clone $image;
        $color = clone $image;


        $gray->fill('#808080');
        $color->fill($this->color);

        	
        $temp1->greyscale();

    	if ( $this->negate ) {

			$temp1->getCore()->negateImage(false);
	        $temp1->getCore()->compositeImage($gray->getCore(), imagick::COMPOSITE_LIGHTEN, 0, 0);

		} else {
			
	        $temp1->getCore()->compositeImage($gray->getCore(), imagick::COMPOSITE_DARKEN, 0, 0);
		}

        $temp1->getCore()->compositeImage($color->getCore(), imagick::COMPOSITE_COLORIZE, 0, 0);
        $temp1->opacity($this->level);

        
        $image->getCore()->compositeImage($temp1->getCore(), imagick::COMPOSITE_OVERLAY, 0, 0);


        // $this->execute("convert 
        // {$image} 
        // ( -clone 0 -fill '$color' -colorize 100% ) 
        // ( -clone 0 -colorspace gray $negate ) 
        // -compose blend -define compose:args=$args[0],$args[1] -composite 
        // {$image}");

    }
}