<?php
session_start();
if (isset($_SERVER['FUEL_ENV'])) {
	define('DEVELOPMENT', TRUE);
	define('SRV_PATH', "/var/www/colorcompass/colorcompass/dev0/");
	define('APP_PATH', SRV_PATH);
	define('APP_URL', "");
	error_reporting(-1);
	ini_set('display_errors', TRUE);
	$_SERVER['DB'] = array('dsn' => "mysql:host=localhost;dbname=colorcompass", 'user' => 'focusmysql', 'pass' => 'PvVFEm!CS=3L');
	define('TPRE', '');
} else {
	define('DEVELOPMENT', FALSE);
	define('SRV_PATH', "/home/colorcom/public_html/");
	define('APP_PATH', SRV_PATH);
	define('APP_URL', "");
	error_reporting(E_ALL & ~E_STRICT);
	ini_set('display_errors', FALSE);
	$_SERVER['DB'] = array('dsn' => "mysql:host=localhost;dbname=colorcom_website", 'user' => 'colorcom_website', 'pass' => 'T3bU41cXOY3gdBlWT');
	define('TPRE', '');
}
define('COMPANY', 'Color Compass Corporation');
// Include these main classes
require_once APP_PATH . 'classes/database.class.php';
require_once APP_PATH . 'classes/focusmvc.class.php';
require_once APP_PATH . 'classes/menu.class.php';

// Auto load classes
function __autoload($classname) {
	if (strpos($classname, 'Controller') !== false) {
		$file = str_replace('Controller', '', $classname);
		$path = 'controllers/';
	} elseif (strpos($classname, 'Model') !== false) {
		$file = str_replace('Model', '', $classname);
		$path = 'models/';
	} else {
		$file = $classname;
		$path = 'classes/';
	}
	$file = APP_PATH . $path . $file . '.php';
	if (is_readable($file)) {
		require_once $file;
	} else {
		error_log( __FILE__ . ' - ' . __METHOD__ . ' : ' . __LINE__ . "\nFile not found: $file");
	}
}
$router = new Router;

$router->setRoute('cccadmin', 'cccadmin', 'home');
$router->setRoute('emailuser', 'emailuser', 'index');
$router->setRoute('2015expo', NULL, 'expo2015');
try {
	$router->route(new Request);
} catch( Exception $e ) {
	$controller = new error404Controller;
	$controller->error($e->getMessage());
}