<?php
// Abstract class for geometric shapes
abstract class Shape {
    abstract public function calculateArea();
}

// Circle class
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Rectangle class
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Usage
$circle = new Circle(5);
$circleArea = $circle->calculateArea();
echo "Circle Area: " . $circleArea . "\n";

$rectangle = new Rectangle(4, 6);
$rectangleArea = $rectangle->calculateArea();
echo "Rectangle Area: " . $rectangleArea . "\n";

?>