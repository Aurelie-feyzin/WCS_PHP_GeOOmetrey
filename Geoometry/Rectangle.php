<?php

namespace Geoometry;

/**
 * Class Rectangle
 */
class Rectangle extends Shape
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    /**
     * Rectangle constructor.
     * @param $width
     * @param $height
     * @param $color
     */
    public function __construct($width, $height) {
            $this->setWidth($width);
            $this->setHeight($height);
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Rectangle|null
     */
    public function setWidth(int $width): ?Rectangle
    {
        if ($width <= 0) {
            throw new \LogicException("Width <= 0 it's impossible");
        } else {
            $this->width = $width;
            return $this;
        }
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle|null
     */
    public function setHeight(int $height): ?Rectangle
    {
        if ($height <= 0) {
            throw new \LogicException("Height <= 0 it's impossible");
        } else {
            $this->height = $height;
            return $this;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '<div style="width:' . $this->getWidth() . 'px;
                            height:' . $this->getHeight() . 'px; 
                            background:' . $this->getColor() . ';"></div>';
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->getWidth() + $this->getHeight());
    }

    public function getArea(): float
    {
        return $this->getWidth() * $this->getHeight();
    }

}
