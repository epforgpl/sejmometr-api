<?php
/**
 * Versja biblioteki
 * @internal
 */
define('API_LIB_VERSION', '0.1.0');
/**
 * User-Agent jakim przedstawia się API
 */
define('API_LIB_USER_AGENT', 'ePF Sejmometr Client v.' . API_LIB_VERSION);
define('API_KEY', 'b9b20f6e999e80de843351a13c154700');
define('API_SECRET', '66585fd09c3d1685705b4dcbbbcaef62');
define('FORMAT_JSON', 0);
define('FORMAT_XML', 1);

//require_once('ep_Socket.php');
//require_once('ep_Inflector.php');
//require_once('ep_Search.php');
//require_once('ep_Dataset.php');
/**
 * Autoloader
 *
 * @param string $class
 */
//function dataSetload($class)
//{
//    $path = dirname(__FILE__) . '/objects/';
//    if (!file_exists($path . $class . '.php')) {
//        $class = constant('FILE_' . $class);
//    }
//    require_once $path . $class . '.php';
//}
//
//spl_autoload_register('dataSetLoad');

require_once('ep_Autoloader.php');
$o = new epAutoloader();
$o->register();

class epApi
{
    public static $inflector = array();
}