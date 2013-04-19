<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2011 Helmut Schottmüller 
 * @author     Helmut Schottmüller 
 * @package    agentfilter 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['agent'] = array('Search string', 'Checks if the given string is part of the user agent');
$GLOBALS['TL_LANG']['tl_content']['agent_filter'] = array('Action', 'Executes the given action depending on the user agent search result');

$GLOBALS['TL_LANG']['tl_content']['agent_legend'] = 'User agent settings';
$GLOBALS['TL_LANG']['tl_content']['filter_action']['0'] = 'Do nothing';
$GLOBALS['TL_LANG']['tl_content']['filter_action']['1'] = 'Show this content only if the search string is part of the user agent';
$GLOBALS['TL_LANG']['tl_content']['filter_action']['2'] = 'Show this content only if the search string is NOT part of the user agent';

?>