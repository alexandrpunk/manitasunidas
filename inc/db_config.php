<?php
#defined('SERVER') or define("SERVER","localhost");
#defined('USER') or define("USER","gallbo_markoptic");
#defined('PASS') or define("PASS","markoptic2015");
#defined('DB') or define("DB","gallbo_markoptic");

defined('SERVER') or define("SERVER","localhost");
defined('USER') or define("USER","root");
defined('PASS') or define("PASS","root");
defined('DB') or define("DB","manitas");
#defined('DB2') or define("DB2","cms");
defined('MAILFUNDACION') or define("MAILFUNDACION","mfelix@fundacionmarkoptic.org.mx");
//defined('MAILFUNDACION') or define("MAILFUNDACION","asandoval@markoptic.mx");

#encender o apagar el debug de php
defined('DEBUG') or define("DEBUG","true");

if(DEBUG == "true"){
    error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}
?>