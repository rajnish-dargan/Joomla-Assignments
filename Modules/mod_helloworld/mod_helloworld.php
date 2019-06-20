<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

/*Calling getHello from entry file(mod_helloworld.php)  and getting value returned by getHello() of helper.php,
setting this value in a variable $hello in mod_helloworld, which is used for printing in default.php*/
$hello = modHelloWorldHelper::getHello();
require JModuleHelper::getLayoutPath('mod_helloworld');
