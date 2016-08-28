<?php

namespace App\Templates;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class HomeImg implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->resize(320, 150);
		
    }
}