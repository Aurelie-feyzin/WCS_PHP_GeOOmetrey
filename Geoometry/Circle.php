<?php

namespace Geoometry;

/**
 * Class Circle
 */
class Circle extends Shape
{
    const PI = 3.14159;

    /**
     * @var int
     */
    private $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return Circle
     */
    public function setRadius(int $radius): Circle
    {
        if ($radius <= 0) {
            throw new \LogicException("Radius <= 0 it's impossible");
        } else {
            $this->radius = $radius;
            return $this;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '<div style="width:' . $this->getRadius() . 'px;
                            height:' . $this->getRadius() . 'px; 
                            border-radius: 50%;
                            background:' . $this->getColor() . ';"></div>';
    }

    public function getDiameter(): int
    {
        return 2 * $this->getRadius();
    }

    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->getRadius();
    }

    public function getArea(): float
    {
        return pow(2, $this->getRadius()) * self::PI;
    }
}
