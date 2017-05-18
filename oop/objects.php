<?php

class dog // this measn that each class created in this should have the following variables 
{
  public $name = null; // "name" is called property
  public $breed = null; 
  public $color = null;
  public $position = 'lying down';

  public function bark() // "bark" is called method
  {
    echo 'WOOF!';
  }

  public function sit()
  {
    $this->position = 'sitting';
  }
}

$my_dog = new dog(); //this creates a new object of the same class.

var_dump($my_dog);

?>  

<?php

class car 
{
public $model = null;
public $type = null;
public $package = null;
public $color = 'yellow';
public $brand = 'Alfa Romeo';

public function setData($brand, $color)
    {
        $this->brand=$brand;
        $this->color=$color;

    }
}

$my_car = new car();
$my_car->setData('yellow');

?>



