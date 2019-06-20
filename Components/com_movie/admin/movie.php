<?php

/*ENTRY POINT FOR THE COMPONENT*/

/**
 * @package     Joomla.Administrator
 * @subpackage  com_movie
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by Movie
//which is in controller.php having class MovieController 
$controller = JControllerLegacy::getInstance('Movie');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
