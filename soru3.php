
   
<?php

abstract class Vehicles {

public $plate;
public $brand;
public $model;
public $price;
public $length;
public $width;

abstract public function information();

    
}

class Car extends Vehicles{
    
    function __construct($plate,$brand,$model,$price){
    
    $this->plate = $plate;
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
}
    public function information(){
        echo "The car information is as follows:
        Plate: {$this->plate}
        Brand :{$this->brand}
        Model: {$this->model}
        Price: {$this->price}\n";
        
    }
}

class Motorcycle extends Vehicles{
    function __construct($plate,$brand,$model,$price){
        $this->plate = $plate;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }
    public function information(){
        echo "The motorcycle information is as follows:
        Plate:{$this->plate}
        Brand:{$this->brand}
        Model:{$this->model}
        Price:{$this->price}\n";
    }
}
class Plane extends Vehicles{
    function __construct($length,$width,$price){
        $this->length = $length;
        $this->width = $width;
        $this->price = $price;
    }
    public function information(){
        echo "The plain information is a follows:
            Length: {$this->length};
            Width: {$this->width};
            Price: {$this->price}"; 
    }
    
}

$peugeot = new Car("61 TR 610","Peugeot","508","450.000TL");
$harley = new Motorcycle("61 TRR 061","Harley","iron 1200","245.000TL" );
$f16 = new Plane("15m", "9.96m","250 mln");

echo $peugeot->information();
echo $harley-> information();
echo $f16-> information();

?>
