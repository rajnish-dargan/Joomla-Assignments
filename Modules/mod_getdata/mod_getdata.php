<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_getdata
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

	$data = ModGetDataHelper::getData();
	require JModuleHelper::getLayoutPath('mod_getdata');
