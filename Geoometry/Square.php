<?php

namespace Geoometry;

/**
 * Class Square
 */
class Square extends Rectangle
{
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }
}
