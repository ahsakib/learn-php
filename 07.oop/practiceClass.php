<?php

// abstract class

// abstract class Shape
// {
//     protected $color;

//     public function __construct($color = 'red')
//     {
//         $this->color = $color;
//     }

//     // Abstract method to get the area
//     abstract public function getArea();

//     // Concrete method to get the color
//     public function getColor()
//     {
//         return $this->color;
//     }
// }

// class Circle extends Shape
// {
//     protected $radius;

//     public function __construct($radius, $color = 'blue')
//     {
//         parent::__construct($color);
//         $this->radius = $radius;
//     }

//     // Implementation of abstract method to get the area
//     public function getArea()
//     {
//         return pi() * $this->radius * $this->radius;
//     }
// }

// class Rectangle extends Shape
// {
//     protected $width;
//     protected $height;

//     public function __construct($width, $height, $color = 'green')
//     {
//         parent::__construct($color);
//         $this->width = $width;
//         $this->height = $height;
//     }

//     // Implementation of abstract method to get the area
//     public function getArea()
//     {
//         return $this->width * $this->height;
//     }
// }

// $circle = new Circle(5);
// echo "Circle Area: " . $circle->getArea() . "\n";
// echo "Circle Color: " . $circle->getColor() . "\n";

// $rectangle = new Rectangle(4, 6);
// echo "Rectangle Area: " . $rectangle->getArea() . "\n";
// echo "Rectangle Color: " . $rectangle->getColor() . "\n";

trait Greeting{
    public function sayHello(){
        echo "say hello";
    }

    public function sayGoodBye(){
        echo "say Good Bye";
    }
}


class  Myclass{
    use Greeting;
    public function saySomething(){
        echo "hello world";
    }
}

$obj = new Myclass;
$obj->sayHello();
$obj->sayGoodBye();
$obj->saySomething();
