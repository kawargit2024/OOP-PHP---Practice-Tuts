<?php
// model
class Product{
	 private $id;
	 private $name;
	 private $price;
	 private $desc;

	 public function __construct( $id,$name,$price,$desc) {
	 	$this->id =  $id;
	 	$this->name =  $name;
	 	$price = floatval($price); // ensure price is a float;
	 	$this->price =  $price;
	 	$this->desc =  $desc;
	 }


	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getDesc(){
		return $this->desc;
	}
}

// view
class ProductView{
    private $product;
    public function __construct($product){
    	$this->product = $product;
    }
    public function pInfoShow(){
     echo  "<h1>". $this->product->getId() ."</h1>";
     echo  "<h2>". $this->product->getName() ."</h2>";
     echo "<h2>". $this->product->getPrice() ."Tk.</h2>";
      echo "<h2>". $this->product->getDesc() ."</h2>";
      echo  "<button> Cart </button>";
  }
}

// controller
class productController{
  public function pControl($id){
  	// fetched product data from product //
    $product  = new Product($id,"Tshirt", 500 ,"This is Tshirt");

    // pass product data to view //
    $productview =  new ProductView($product);
    $productview->pInfoShow();
  }



}

$productCon = new productController();
$productCon->pControl(5);