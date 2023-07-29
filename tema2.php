<!--
  1. write a simple class that displays a message like "hello, my name is Alex", where
  "Alex" an argument value of the method from the class.
  2. write classes that describe types of vehicles, starting from a base class and extending it. 
  (advanced: at least 8 classes , 3 abstract methods and 2 non-abstract).
  3.Write a small program that fakes the calculation of a net salary and returns it. the insert will be mocked 
  (set the parameters manually) (mvc).
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Exercitiul 1. <br><br>
  <?php 
  class Hi{
    private $name;
    
    public function __construct($name)
    {
      $this->name=$name;
    }

    public function display()
    {
      echo "Hello, my name is ".$this->name;
    }
  }

  $hi=new Hi("Alex");
  $hi->display();
  ?>


<br><br><br>
<br>
Exercitiul 2.
<br>
<?php
abstract class Vehicle {
    protected $model;
    protected $km;

    public function __construct($km, $model) {
        $this->km = $km;
        $this->model = $model;
    }

    abstract public function vruum();
    abstract public function honk();

    public function getKmNumberAndModel() {
        return $this->km . " " . $this->model;
    }
}

class Car extends Vehicle {
    private $color;

    public function __construct($km, $model, $color) {
        parent::__construct($km, $model);
        $this->color = $color;
    }

    public function vruum() {
        echo $this->getKmNumberAndModel() . " is making vruum.\n";
    }

    public function honk() {
        echo $this->getKmNumberAndModel() . " is honking the horn.\n";
    }

    public function getColor() {
        return $this->color;
    }
}

class Motorcycle extends Vehicle {
    private $brand;

    public function __construct($km, $model, $brand) {
        parent::__construct($km, $model);
        $this->brand = $brand;
    }

    public function vruum() {
      echo $this->getKmNumberAndModel() . " is making vruum.\n";
  }

    public function honk() {
        echo $this->getKmNumberAndModel() . " is honking the horn.\n";
    }

    public function theBrand() {
        echo $this->brand;
    }
}


class Bicycle extends Vehicle {
    private $type;

    public function __construct($brand, $model, $type) {
        parent::__construct($brand, $model);
        $this->type = $type;
    }

    public function vruum() {
      echo $this->getKmNumberAndModel() . " is making vruum.\n";
   }

    public function honk() {
        echo $this->getKmNumberAndModel() . " doesn't have a horn.\n";
    }

    public function getType() {
        return $this->type;
    }
}


$car = new Car(200000, "Corolla", "blue");
echo "<br>";
$car->vruum();
echo "<br>";
$car->honk();
echo "<br>";
echo "Color: " . $car->getColor() . "\n";
echo "<br>";

$motorcycle = new Motorcycle(100000, "Road King", "Harley-Davidson");
echo "<br>";
$motorcycle->vruum();
echo "<br>";
$motorcycle->honk();
echo "<br>";
echo "Brand: " . $motorcycle->theBrand() . "\n";
echo "<br>";

$bicycle = new Bicycle(2000, "Talon", "Mountain");
echo "<br>";
$bicycle->vruum();
echo "<br>";
$bicycle->honk();
echo "<br>";
echo "Bicycle type: " . $bicycle->getType() . "\n";
echo "<br>";
?>
<br><br><br>
<br>
Exercitiul 3.
<br>
<?php
require_once 'controller.php';

$controller = new SalaryController();
$controller->calculateSalary();
?>

</body>
</html>