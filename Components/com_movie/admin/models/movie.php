<?php

/*MODEL FOR MOVIE*/
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
 * movie Model
 *
 * @since  0.0.1
 */
class MovieModelMovie extends JModelAdmin
{
	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'Movie', $prefix = 'MovieTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed    A JForm object on success, false on failure
	 *
	 * @since   1.6
	 */
	 //this function loads the form
	public function getForm($data = array(), $loadData = true)
	{
		
		// Get the form.
		$form = $this->loadForm(
			'com_movie.movie',
			'movie',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);
	
		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 *
	 * @since   1.6
	 */
	 //load data in edit form or when validation fail.
	 //on fail of validation data comes in form through usersession.
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_movie.edit.movie.data',
			array()
		);
		
		if (empty($data))
		{	
			//$this- >getItem(),creates a JObject with the fields for the form
			$data = $this->getItem();
		}

		return $data;
	}
}
