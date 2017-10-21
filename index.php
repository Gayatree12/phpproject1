<?php
//to output error messages
ini_set('display_errors', 'On');
//error_reporting(E_ALL); //report all PHP errors; E_ALL is a constant

class manageFiles {
	public static function autoload($class) {
		include $class . '.php';
	}
}
spl_autoload_register(array('manageFiles','autoload'));  //register multiple autoloader functions
$obj = new main(); 
class main {
  public function __construct() {
  $pagerequest = 'uploadform';
    if(isset($_REQUEST['page'])) {
      $pagerequest = $_REQUEST['page'];
    }
    $page = new $pagerequest; //instantiation
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $page -> get();
    }
      else {
        $page -> post();
      }  
  } 
}
abstract class page {
  protected $myFile;
  public function __construct() {
    $this -> myFile .= '<html></body>';
    $this -> myFile .= '<link rel="stylesheet" href="styles.css">';
  }
  public function __destruct() {
    $this -> myFile .= '</html></body>';
    print($this -> myFile);
  }
}
?>