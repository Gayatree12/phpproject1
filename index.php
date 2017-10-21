<?php
//to output error messages
ini_set('display_errors', 'On');
error_reporting(E_ALL); //report all PHP errors; E_ALL is a constant

class manageFiles {
	public function __construct() {
		$include . '.php';
	}
  spl_autoload_register(array('manageFiles','autoload'));  //register multiple autoloader functions
}
class main {
  public function __construct() {
  $pagerequest = 'uploadform';
    if(isset($_REQUEST['page'])) {
      $pagerequest = $_REQUEST['page'];
    }
    $page = new $pagerequest; //instantiation
    if($_SERVER['REQUEST_METHOD'] == GET) {
    $page -> get();
    }
      else {
        $page -> post();
      }  
  } 
}
?>