<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_getdata
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Helper for mod_getdata
 *
 * @since  3.9.5
 */
class ModGetDataHelper
{
	/**
	 * Fetch data from movie table
	 *
	 * @return  array
	 * 
	 * @since  3.9.5
	 */
	public static function getData()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select($db->quoteName(array('id', 'mname', 'release_year','actor')));
		$query->from($db->quoteName('#__movie'));
		$db->setQuery($query);
		$results = $db->loadAssocList();

		return $results;
	}
}
