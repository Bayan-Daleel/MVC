<?php 
define("DC",DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__));
define('APP',ROOT.DC.'app');
define('CONFIG',APP.DC.'config'.DC);
define('CONTROLLERS',APP.DC.'controllers'.DC);
define('MODELS',APP.DC.'models'.DC);
define('VIEWS',APP.DC.'views'.DC);
define('CORE',APP.DC.'core'.DC);

require_once ("../vendor/autoload.php");



$app =new MVC\core\APP();


?>