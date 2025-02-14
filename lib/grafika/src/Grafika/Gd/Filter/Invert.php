<?php

namespace THNBO\Grafika\Gd\Filter;

use THNBO\Grafika\FilterInterface;
use THNBO\Grafika\Gd\Image;

/**
 * Invert the image colors.
 */
class Invert implements FilterInterface{

    /**
     * @param Image $image
     *
     * @return Image
     */
    public function apply( $image ) {

        imagefilter($image->getCore(), IMG_FILTER_NEGATE);
        return $image;
    }

}