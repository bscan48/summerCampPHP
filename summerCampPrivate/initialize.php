<?php

  ob_start(); // turn on output buffering

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);

  //define("WWW_ROOT", $doc_root);
  //define("WWW_ROOT", '/summercamp.brianscanlon.net');
  define("WWW_ROOT", '');


  require_once('functions.php');
  require_once('status_error_functions.php');
  require_once('db_credentials.php');
  require_once('database_functions.php');
  require_once('validation_functions.php');

  // Load class definitions manually

  // -> Individually
  // require_once('classes/bicycle.class.php');

  
  // -> All classes in directory
  
  require_once('classes/DatabaseObject.class.php');
  require_once('classes/admin.class.php');
  require_once('classes/CampClass.class.php');
  require_once('classes/pagination.class.php');
  require_once('classes/session.class.php');
  
//  foreach(glob($_SERVER['DOCUMENT_ROOT'].'classes/*.class.php') as $file) {
//    echo('init one.1<br>');
//    echo $file . '<br>';
//    require_once($file);
    //include($file);
//  }

    //echo('init two<br>');

  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes/' . $class . '.class.php');
    }
  }

//die('init three<br>');

  spl_autoload_register('my_autoload');

  $database = db_connect();
  DatabaseObject::set_database($database);

  $session = new Session;

//    die('init four<br>');

?>
