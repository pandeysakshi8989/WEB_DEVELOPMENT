<!---<!DOCTYPE html>
<html>
<head>
<title>PHP Inheritance Example</title>
<script>
function showAlert(message) { alert(message);
 
}
</script>
</head>
<body>
<h2>Enter Animal Details</h2>
<form id="animalForm" onsubmit="return false;">
Name: <input type="text" id="name" required><br><br> Sound: <input type="text" id="sound" required><br><br>
<input type="button" value="Submit" onclick="createAnimal()">
</form>

<script>
function createAnimal() {
var name = document.getElementById('name').value; var sound = document.getElementById('sound').value;

// Create a Dog object
var dog = new Dog(name, sound);
var animalDetails = dog.displayAnimal();

// Show the animal details in an alert box showAlert(animalDetails);
}

// Animal class definition (superclass)
 class Animal {
constructor(name, sound) { this.name = name; this.sound = sound;
}

displayAnimal() {
return "Animal: " + this.name + "\\nSound: " + this.sound;
}
 }

// Dog class definition (subclass) 
class Dog extends Animal {
constructor(name, sound) {
super(name, sound); // Call the parent class constructor
}
 
displayAnimal() {
return "Animal: " + this.name + "\\nSound: " + this.sound;
}
}

</script>
</body>
</html> --->

<?php
// Superclass (Parent Class)
class Animal {
    // Property of the superclass
    public $name;
    
    // Constructor of the superclass
    function __construct($name) {
        $this->name = $name;
    }

    // Method of the superclass
    function speak() {
        echo $this->name . " makes a sound.<br>";
    }
}

// Subclass (Child Class) that inherits from Animal
class Dog extends Animal {
    // Additional method in the subclass
    function speak() {
        echo $this->name . " barks.<br>";
    }
}

// Creating an object of the subclass (Dog)
$dog = new Dog("Buddy");

// Calling the inherited constructor (from the parent class)
$dog->speak(); // This will call the overridden method in the Dog class

// Creating an object of the superclass (Animal)
$animal = new Animal("Generic Animal");
$animal->speak(); // This will call the method in the Animal class
?>
