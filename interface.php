<?php

// interface //

interface Car{
	public function makeHorn():string; 
}

class Volvo implements Car{
 public $hello;
 public function makeHorn():string{
 	return "Peep";
 }
}

class autoCar implements Car{
	public function makeHorn():string{
 	return "Beep";
 }
}

function makeSound($car){
 echo $car->makeHorn();
}

$volvo = new Volvo();
$autocar = new autoCar();

makeSound($volvo);
makeSound($autocar);

// polymorphism concept //
//  polymorphism //

echo "</br>";

// with interface and abstract class //

interface Fruits{
	public function getFruits();
}

class Tomato implements Fruits{
 public function getFruits(){
  echo "Tomaoto";
 }
}

class Potato implements Fruits{
 public function getFruits(){
  echo "Potato";
 }
}


abstract class newFruits implements Fruits{
 public function getFruits(){
  $this->mango();
 }
 abstract protected function mango();
}

class Tomato2 extends newFruits{
	protected function mango(){
		echo "Tomato looks Red";
	}
}

class Potato2 extends newFruits{
	protected function mango(){
      echo "Potato looks White";
	}
}


function getTotFruits($param){
  echo $param->getFruits();
}


$tomato = new Tomato();
$potato = new Potato();
$tomato2 = new Tomato2();
$potato2 = new Potato2();


getTotFruits($tomato);
getTotFruits($potato);
getTotFruits($tomato2);
getTotFruits($potato2);

echo "</br>";
// polymorphism with abstact class //
abstract class payment{
	abstract public function getPayment();
}

class account extends payment{
	public $acc;
	public function __construct($acc){
		$this->acc = $acc;
	}
	public function getPayment(){
		return $this->acc;
	}
}

class balance extends payment{
	public $bal;
	public function __construct($bal){
		$this->bal = $bal;
	}
	public function getPayment(){
		return $this->bal;
	}
}

function getPaymentInfo($acount){
  echo $acount->getPayment();
}

$acc = new account("Our Accunt");
$bal = new balance("Our Ballance");

 getPaymentInfo($acc);
 getPaymentInfo($bal);

echo "</br></br>";


// another polymorphisme example //

interface Animal{
	public function animalSound();
}

class Doggy implements Animal{
  public function animalSound(){
  	echo "Barking Doggy";
  }
}

class Catty implements Animal{
  public function animalSound(){
  	echo "Barking Doggy";
  }
}

class Panddy implements Animal{
  public function animalSound(){
  	echo "Barking Panddy";
  }
}

$doggy  =  new Doggy();
//$doggy->animalSound();
$catty  =  new Catty();
//$catty->animalSound();
$panddy  =  new Panddy();
//$panddy->animalSound();


$animals = array( $doggy, $catty, $panddy );
foreach($animals  as $animal){
  echo $animal->animalSound();
}