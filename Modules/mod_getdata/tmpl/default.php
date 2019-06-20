<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_getdata
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<?php
	echo "<table class='table table-striped table-hover'>";
	echo "<th colspan=3>Movie Details</th>";
	echo"<tr><td><b>Movies</b></td><td><b>Release Year</b></td><td><b>Lead Actor</b></td></tr>";

	for ($i = 0;$i < count($data);$i++)
	{
		echo"<tr>";
		echo"<td>" . $data[$i]["mname"] . "</td>";
		echo"<td>" . $data[$i]["release_year"] . "</td>";
		echo"<td>" . $data[$i]["actor"] . "</td>";
		echo"</tr>";
	}
