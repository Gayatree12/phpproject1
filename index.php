<?php

class manageFiles {
	public static function autoload($class) {
		include $class . '.php'; //including and evaluating the specified files
	}
}
spl_autoload_register(array('manageFiles','autoload'));  //register multiple autoloader functions

$obj = new main(); //instantiating class main

class main {
  public function __construct() {
  $pagerequest = 'uploadform';
    if(isset($_REQUEST['page'])) { //determine if a variable is set 
      $pagerequest = $_REQUEST['page'];
    }
    $page = new $pagerequest; //instantiating the requested class:page
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $page -> get();
    }
      else {
        $page -> post();
      }  
  } 
}
//declaring abstract methods; no actual implementation done here
abstract class page {
  protected $myFile;
  public function __construct() {   
    $this -> myFile .= '<link rel="stylesheet" href="styles.css">';
  }
  public function __destruct() {
    print($this -> myFile);
  }
}
?>