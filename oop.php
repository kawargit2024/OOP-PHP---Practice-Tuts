<?php
// What is OOP?

// // easer to execute
// // provides a clear structure for the progrmms
// // easier to maintain, modify and debug
// // less code and shorter development time.

// // Classes and Objects ?
// // Class 
//    // Fruit
//       /// Apple
//       /// Banana
//       /// Mango
// // Class is a template of objects, and 
// // Objects is an instance of class.

class myClass{

	// properties //
	public $name = "Kawsar". "And ";
	public $pet = "Cat";

	// method //
    function set_name($param1,$param2){
      $this->name = $param1;
       $this->color = $param2;
    }

}

$obj = new myClass();
$obj->set_name("kawsar","sky");
echo $obj->name;
echo $obj->pet;

// // construct //

class myPet{
 public $cat;

 public function __construct($val){
 	 $this->cat = $val;
 }

 public function catFunc(){
  return $this->cat;
 }

}
$myObj = new myPet("mycat");
echo $myObj->catFunc();

// // another example //

class Color{
	 // properties
	 public $red;
	 public $green;
	 public $blue;
	 public function __construct($r,$g,$b){
	   $this->red = $r;
	   $this->green = $g;
	   $this->blue = $b;
	}

	public function Ouput(){
		return  $this->red ." ". 
		$this->green ."". $this->blue." ";
	}
}
$color = new Color("red","green","blue");
echo $color->Ouput();

// // destruct //
// echo "</br>";
class Food{
  public $grill;
  public $cacchy;

  public function __construct($g,$c){
    $this->grill = $g;
    $this->cacchy = $c;
  }

   public function __destruct(){
    echo $this->grill . " And " . $this->cacchy;
  }

}
$foodObj = new Food("grill Chicken","Beff Cachy");


// // Acess Modifiers
// // public // protected // private

// echo "</br>";
class School{

 public $class = "NINE </br>";
 protected $student = "kamal my student </br>";
 private  $teacher = "sudin is a teacher </br>";

 protected function myStudent(){
  return $this->student;
 }

 public function myTeacher(){
  return  $this->teacher;
 }

}

class versity extends School{
	 public function myStudent2(){
	  return $this->myStudent();
	 }
	  public function myTeacher2(){
	  return $this->myTeacher();
	 }
}

$schObj = new versity();
echo $schObj->class;
echo $schObj->myStudent2();
echo $schObj->myTeacher();

// echo "</br>";
// echo "</br>";
// echo "</br>";

// //
 class myGfather{

	public $father;
	public $son;
	public $gson;

 public function __construct($f,$s,$gs){
  $this->father = $f;
  $this->son = $s;
  $this->gson = $gs;
 }


 public function intro(){
 	return $this->father." ".$this->son." ".
 	$this->gson." ";
 }

}


class Father extends myGfather{
  public function intro2(){
  	echo "Hello My Dear";
	 $this->intro();
   }
}


$obj = new Father("My BaBa","My Son","My Gson");
echo $obj->intro();
echo $obj->intro2();

// // class cosntants //
class hello{
 const myConst = "Hello Mama";
 public function hello(){
 	return self::myConst;
 }

}
$obj = new hello();
echo  $obj->hello();

// //OOP principal //
// // Encapsulation
// // Abstraction
// // Inheritance
// // Polymorphism

// // encapulation //

echo "</br>";
echo "</br>";
class encapsul{
	public $cap = "myCap";
	private $color = "myColor";

 private function myFunc(){
 	return $this->color;
 }

 public function myFunc2(){
 	return $this->cap;
 }


}
$myObj = new encapsul();
echo $myObj->cap;
echo $myObj->myFunc2();

echo "</br>";
echo "</br>";
// Inheritance //

class deparmentInfo{
	public $depName;
	public $depClassNo;
	public $depTeacher;
	public $depStudentNum;

	public function __construct($dn,$dcn,$dt,$dsn){
	  $this->depName = $dn;
	  $this->depClassNo = $dcn;
	  $this->depTeacher = $dt;
	  $this->depStudentNum = $dsn;
	}

    
    public function depInfo(){
    	return $this->depName ." "."Department arrage a tour in every year";
    }

} 


class depStatic extends deparmentInfo{
	public $labsContact = 254566;
}
class depBio extends deparmentInfo{
   public $labsContact = 14785;
   public function depActivity(){
    	return $this->depName ." "."Department arrage a activity once a week";
    }

}
class depPhy extends deparmentInfo{
  public $labsContact = 36955;
}
class depChem extends deparmentInfo{
  public $labsContact = 25874;
}
class depMath extends deparmentInfo{
  public $labsContact = 149874;
}


$depStatic = new depStatic("Statics","200","Dr.Halim","300");
$depBio = new depBio("Biology","200","Dr.Halim",300);
$depPhy = new depPhy("Physics","300","Dr.Kaful",400);
$depChem = new depChem("Chemistry","420","Dr.Mofiz",350);
$depMath = new depMath("Math","220","Dr.Hafiz",200);
echo $depStatic->depInfo()."</br></br>";
echo $depStatic->depClassNo;
echo $depStatic->depTeacher;
echo $depStatic->depStudentNum;
echo $depBio->depInfo()."</br></br>";
echo $depPhy->depInfo()."</br></br>";
echo $depChem->depInfo()."</br></br>";
echo $depMath->depInfo()."</br>";

echo $depStatic->labsContact;
echo "<strong>Class Room : </strong>" . $depStatic->depClassNo . "</br>";
echo "<strong>Teacher : </strong>" . $depStatic->depTeacher . "</br>";
echo "<strong>Student Number : </strong>" . $depStatic->depStudentNum . " ";
$depBio = new depBio("Bilogy","420","Dr.Mofiz","350");
echo $depBio->depActivity()."</br></br>";
echo $depBio->depClassNo;



// What is traits//

// php only supports single inheritance: a chile class can
// inherit only from one single parent
// another example of trait
// //
// //
// //
// //

trait departInfo{
	private $depName;
	private $depClassRoom;
	private $depTeacher;
	private $depStu;
	private $depCont;

   public function __construct( $p1, $p2, $p3, $p4, $p5 ){
   	 $this->depName = $p1;
   	 $this->depClassRoom = $p2;
   	 $this->depTeacher = $p3;
   	 $this->depStu = $p4;
   	 $this->depCont = $p5;
   }

   public function commonInfo(){
     return  "Department : ". $this->depName ."</br>". 
     "Class : ". $this->depClassRoom ."</br>". 
     "Teacher : ". $this->depTeacher ."</br>". 
     "Student : ". $this->depStu ."</br>". 
//      "Contact : ". $this->depCont;
//    } 
// }

class staticDep{
  use departInfo;
  public function cInfo(){
	 echo ". </br> And This Departmtn arrange a 
	 tour evey year" ;
  }
}

class BioDep{
  use departInfo;
}


class mathDep{
  use departInfo;
  public function cInfo(){
	 echo ". </br> And This Departmtn arrange a 
	 tour evey year" ;
  }
}

class phyDep{
  use departInfo;
  public function cInfo(){
	 echo ". </br> And This Department Arrange a workshop every month" ;
  }
}

$staObj = new staticDep("Static",555,"Mr Mofiz" , 200, "018451278");
echo $staObj->commonInfo();
echo $staObj->cInfo();

echo "</br></br>";

$BioObj = new BioDep("Biology",333,"Mr Hafiz" , 150);
echo $BioObj->commonInfo();

echo "</br></br>";
$mathObj = new mathDep("Math",258,"Miss Laila" , 300);
echo $mathObj->commonInfo();
echo $mathObj->cInfo();

echo "</br></br>";
$phyObj = new phyDep("Physics",159,"Mr Hasan" , 350);
echo $phyObj->commonInfo();
echo $phyObj->cInfo();

// // // abstrastion //
// // // contain at least on abstract method.
// // // An abstract method is a method that is 
// // // declared, but nto implemented in the code.
// // // An abstract class or mehtod is deifned with the "abstract" keyword.

abstract class MyAbsCls{

	public $color;
	public $food;

	public function __construct($p1,$p2){
       $this->color = $p1;
       $this->food = $p2;
	}

	abstract public function helloMama();
}

class red extends MyAbsCls{
	public function helloMama(){
     return $this->color;
	}
}

class green extends MyAbsCls{
	public function helloMama(){
     return $this->food;
	}
}


$obj = new red("Sky is Pink");
// echo $obj->helloMama();

$obj2 = new green("Grill");
echo $obj2->helloMama();



// // // traits //


trait carTrait{
private $volvo;
 private $tesla;
 private $sujuki;

 public function __construct($v1,$v2,$v3){
 	$this->volvo = $v1;
 	$this->tesla = $v2;
 	$this->sujuki = $v3;
 }

  public function carInfo(){
  	return $this->volvo ." ". $this->tesla;
  }
}


trait carTrait2{
 public function carInfo2(){
  	return $this->sujuki;
  }

}

class car{
 use carTrait,carTrait2;
}

$car = new car("volvo","tesla","sujuki");
echo $car->carInfo();
echo $car->carInfo2();

// // abstract //

abstract class color{
	protected $sky;
	protected $tree;
	public function __construct($s,$t){
     $this->sky = $s;
     $this->tree = $t;
	}

	abstract public function colorInfo();

}

class sky extends color{
  protected $night;
  public function __construct($s,$t,$n){
	    $this->night = $n;
	    parent::__construct($s,$t);
  }

  public function colorInfo(){
		return $this->night." ".$this->sky." ".$this->tree;
  }
}

$sky = new sky("blue","green","black");
echo $sky->colorInfo();

// // interface //

// // allow you to specify what methods a class should implement //
// // When one or more classes use the same interface, it is
// // referred to as "polymorphism";//
// // interface make is easy to variety of different classes in the same way. //


interface fruits{
	public function fruitInfo();
}


class apple implements fruits{
   public function fruitInfo(){
   	 return "Apple";
   }
}

class coconut implements fruits{
   public function fruitInfo(){
   	 return "coconut";
   }
}

class jack implements fruits{
   public function fruitInfo(){
   	 return "jack";
   }
}

$apple = new apple();
//echo $apple->fruitInfo();
$coconut = new coconut();
//echo $coconut->fruitInfo();

$jack = new jack();
//echo $jack->fruitInfo();

$fruits = array($apple,$coconut,$jack);
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

foreach($fruits as $fruit){
  echo $fruit->fruitInfo()." ";
}






// //polymorphism //
class animal{
	protected $name;
	public function __construct($p){
		$this->name = $name;
	}
	public function makeSound(){
		return "animal sound";
	}
}


class cat extends animal{
	public function makeSound(){
		return "meow";
	}
}


class dog extends animal{
	public function makeSound(){
		return "woof";
	}
}


$cat  = new cat();
$dog = new dog();

// // MVC design pattern //

// // M = model
// // encapsulte data and logic
// // interact with database, perform calculatin and enforce data integrity 
// //  often implemtns classed representying data entities.
// //  i.e user, product
// //
// //
// //
// v = view
// responsible for presenting data to the user and handle user interface
//
// c = controller
// as a intermediary between the Model and View.
// intarect with modle to retirve, process and store data 
// received user request (url, submit)
// update view according to user request
// perform validation or error handling before passing data to the view

// MVC example with code //


// model(user.php);
class  User{
	private $id;
	private $name;
	private $email;

  public function __construct( $id, $name, $email ){
  	$this->id = $id;
  	$this->name = $name;
  	$this->email = $email;
  }

  public function getID(){
  	return "ID : ". $this->id."</br>";
  }
  public function getName(){
    return "Name : " . $this->name."</br>";
  }
  public function getEmail(){
  	return "Email : " . $this->email;
  }

}

$user = new User(20,"kawsar","hello@gmail.com");
echo $user->getID();
echo $user->getName();
echo $user->getEmail();


