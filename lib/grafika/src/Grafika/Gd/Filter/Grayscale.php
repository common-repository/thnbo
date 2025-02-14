<?php

namespace THNBO\Grafika\Gd\Filter;

use THNBO\Grafika\FilterInterface;
use THNBO\Grafika\Gd\Image;

/**
 * Turn image into grayscale.
 */
class Grayscale implements FilterInterface{

    /**
     * @param Image $image
     *
     * @return Image
     */
    public function apply( $image ) {
        imagefilter($image->getCore(), IMG_FILTER_GRAYSCALE);
        return $image;
    }

}