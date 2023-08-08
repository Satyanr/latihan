 
<?php 
ob_start();
session_start();

//database details
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','latihan_blog_db');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone- Asia Kolkata 
date_default_timezone_set('Asia/Kolkata');

//load classes as needed
function my_autoloader ($class) {
   
   $class = strtolower($class);

    //if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }   
    
    //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }
    
    //if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }       
     
}

spl_autoload_register("my_autoloader");

$user = new User($db); 
include("functions.php"); 

?>