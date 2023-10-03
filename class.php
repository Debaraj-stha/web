<?php 
class Person {
    private $name, $age, $gender;
    
    public function getName($x, $y, $z) {
        $this->name = $x;
        $this->age = $y;
        $this->gender = $z;
    }
    
    function displayDetails() {
        echo "Name: ".$this->name."<br/>";
        echo "Age: ".$this->age."<br/>";
        echo "Gender: ".$this->gender."<br/>";
    }
}

$ram = new Person;
$ram->getName("Ram", "22", "M");
$ram->displayDetails();


?>