<!----<!DOCTYPE html>
<html>
<head>
<title>PHPOOPExample</title>
<script>
function showAlert(message){ alert(message);
}
</script>
</head>
<body>
<h2>EnterUserDetails</h2>
<formid="userForm"onsubmit="returnfalse;">
Name: <input type="text" id="name" required><br><br> Email:<inputtype="email"id="email"required><br><br>
<inputtype="button"value="Submit"onclick="createUser()">
</form>

<script>
function createUser(){
varname=document.getElementById('name').value; varemail =document.getElementById('email').value;

//CreateaUser object
var user = new User(name, email); varuserDetails=user.displayUser();
 
//Showtheuserdetailsinanalertbox showAlert(userDetails);
}

//Userclassdefinition 
class User {
constructor(name,email){ this.name = name; this.email = email;
}

displayUser(){
return"Name:"+ this.name+"\\nEmail:"+this.email;
}
}
</script>
</body>
</html> --->

<?php
// Define a class called "Person"
class Person {
    // Properties of the class
    public $name;
    public $age;
    
    // Constructor to initialize properties
    function __construct($name, $age) {
        $this->name = $name;  // Set the name property
        $this->age = $age;    // Set the age property
    }
    
    // Method to display information about the person
    function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Create an object of the class "Person" and pass parameters to the constructor
$person1 = new Person("John Doe", 25);

// Call the method to display the object's information
$person1->displayInfo();

// Another object initialization
$person2 = new Person("Alice Smith", 30);
$person2->displayInfo();
?>
