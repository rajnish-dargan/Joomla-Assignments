<?php

/*BASE CONTROLLER*/

/**
 * @package     Joomla.Administrator
 * @subpackage  com_movie
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// NO DIRECT ACCESS TO THIS FILE
defined('_JEXEC') or die('Restricted access');

/**
 * General Controller of movie component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_movie
 * @since       0.0.7
 */
class MovieController extends JControllerLegacy
{
	/**
	 * The default view for the display method.
	 *
	 * @var string
	 * @since 12.2
	 */
	 //LOADS MOVIES LIST VIEW IF NO TASK IS PASSED IN URL
	protected $default_view = 'movies';
}
