<?


class Vehicle{

  function power(){
    echo '動力來源是引擎';
  }

  function engine_drive(){
    echo '引擎會驅動輪胎';
  }

}

interface Tire{
  public function tire();
}

interface Door{
  public function door();
}

class Car extends Vehicle implements Tire,Door{

  public function tire(){
      echo '大多有四個輪胎';
  }
  public function door(){
      echo '大多有門';
  }

}

class Motorcycle extends Vehicle implements Tire,Door{

  public function tire(){
      echo '大多是兩個輪胎';
  }
  public function door(){
      echo '大多沒門';
  }

}
$car = new Car();
$motorcycle = new Motorcycle();
print("汽車");
$car->tire();
print("<br>"."機車");
$motorcycle->tire();
print("<br>"."汽車");
$car->door();
print("<br>"."機車");
$motorcycle->door();


?>
