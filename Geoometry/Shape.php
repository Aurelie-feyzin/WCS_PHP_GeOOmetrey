<?php

namespace Geoometry;

/**
 * Class Shape
 */
abstract class Shape
{
    /**
     * @var string
     */
    protected $color = 'black';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return float
     */
    abstract public function getPerimeter(): float ;

    /**
     * @return float
     */
    abstract public function getArea(): float ;
}
