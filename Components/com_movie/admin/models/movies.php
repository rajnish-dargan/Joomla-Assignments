<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_movie
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * movieList Model
 *
 * @since  0.0.1
 */
class MovieModelMovies extends JModelList
{
	public function __construct($config = array())
	{	//ON THE BASIS OF THESE LIST VIEW IS ARRANGE IN ASSCENDING/DESCENDING ORDER ON CLICK OF THESE LABEL
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id',
				'mname',
				'release_year'
			);
		}

		parent::__construct($config);
	}
	
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('*')
			  ->from($db->quoteName('#__movie'));
			  
		// Filter: like / search
		//FILTER BY WORD PROVIDED IN SEARCH BOX
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$like = $db->quote('%' . $search . '%');
			$query->where('mname LIKE ' . $like);
		}
		
		// Filter by published state
		//FILTER THROUGH SELECTION IN SEARCH TOOL
		$published = $this->getState('filter.published');

		if (is_numeric($published))
		{
			$query->where('published = ' . (int) $published);
		}
		elseif ($published === '')
		{
			$query->where('(published IN (0, 1))');
		}

		// Add the list ordering clause.
		//ADDED TO CHECK THE STATE OF ORDER ON CLICK OF LABEL
		$orderCol	= $this->state->get('list.ordering', 'mname');
		$orderDirn 	= $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));


		return $query;
	}
}
