<?php
// Define a namespace called "Animals"
namespace Animals {
    class Dog {
        public function speak() {
            echo "Woof! Woof!<br>";
        }
    }

    class Cat {
        public function speak() {
            echo "Meow! Meow!<br>";
        }
    }
}

// Define a namespace called "Vehicles"
namespace Vehicles {
    class Car {
        public function start() {
            echo "Vroom! Vroom!<br>";
        }
    }

    class Bike {
        public function start() {
            echo "Zoom! Zoom!<br>";
        }
    }
}

// Define another namespace "Animals1" for the alias example
namespace Animals1 {
    class Dog1 {
        public function speak() {
            echo "Woof! Woof!<br>";
        }
    }
}

// Define the "MathOperations" namespace
namespace MathOperations {
    // Define a constant
    const PI = 3.14159;

    // Define functions
    function add($a, $b) {
        return $a + $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }
}

// Using the classes from the "Animals" namespace
namespace {
    use Animals\Dog;
    use Animals\Cat;

    $dog = new Dog();
    $dog->speak();  // Output: Woof! Woof!

    $cat = new Cat();
    $cat->speak();  // Output: Meow! Meow!
}

// Using the classes from the "Vehicles" namespace
namespace {
    use Vehicles\Car;
    use Vehicles\Bike;

    $car = new Car();
    $car->start();  // Output: Vroom! Vroom!

    $bike = new Bike();
    $bike->start();  // Output: Zoom! Zoom!
}

// Using an alias for a class from the "Animals1" namespace
namespace {
    use Animals1\Dog1 as Puppy;

    $myPuppy = new Puppy();
    $myPuppy->speak();  // Output: Woof! Woof!
}

// Using functions and constants from the "MathOperations" namespace
namespace {
    // Fully qualify the function name from the MathOperations namespace
    echo "Addition of 5 and 10: " . \MathOperations\add(5, 10) . "<br>";  // Output: 15
    echo "Multiplication of 5 and 10: " . \MathOperations\multiply(5, 10) . "<br>";  // Output: 50
    
    // Directly use the constant by referencing its full namespace
    echo "Value of PI: " . \MathOperations\PI . "<br>";  // Output: 3.14159
}
?>
