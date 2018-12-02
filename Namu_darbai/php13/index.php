<?php
class Person{
  public $name;
  public $surname;

  public function labas(){
    return 'Sveiki, ' . $this -> name . ', tavo pavardė ' . $this -> surname . '<br>';
  }
}

$zmogus1 = new Person();
$zmogus2 = new Person();

$zmogus1 -> name = "Tadas";
$zmogus1 -> surname = "Tadauskas";

$zmogus2 -> name = "Petras";
$zmogus2 -> surname = "Petrauskas";

echo $zmogus1 -> labas();
echo $zmogus2 -> labas();


?>
