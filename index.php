<?php

spl_autoload_register('autoloadClass');

function autoloadClass($class)
{
    $nameClass = str_replace('\\', '/', $class);
    include(__DIR__ . "/" . $nameClass . ".php");
}

try {
    $rectangle = new Geoometry\Rectangle(200, 150 );
    echo $rectangle . '<br>';
    echo "Area of rectangle is " . $rectangle->getArea() . 'px<sup>2</sup>' . '<br>';;
} catch (Exception $e) {
    echo $e->getMessage();
}


try {
    $rectangle = new Geoometry\Rectangle(200, -50);
    $rectangle->setColor('red');
    echo $rectangle. '<br>';
    echo "Area of rectangle is " . $rectangle->getArea() . 'px<sup>2</sup>' . '<br>';
} catch (Exception $e) {
     echo $e->getMessage(), '<br>';
}


try {
    $square = new Geoometry\Square(150);
    $square->setColor('red');
    echo $square . '<br>';
} catch (Exception $e) {
    echo $e->getMessage() .'<br>';
}


try {
    $circle = new Geoometry\Circle(150);
    $circle->setColor('blue');
    echo $circle, '<br>';
    echo "Perimeter of circle is " . $circle->getPerimeter() . 'px<sup>2</sup>';
} catch (Exception $e) {
    echo $e->getMessage() , '<br>';
}

