<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Agentfilter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\AgentFilter'          => 'system/modules/agentfilter/classes/AgentFilter.php',

	// Pages
	'Contao\PageRegularUserAgent' => 'system/modules/agentfilter/pages/PageRegularUserAgent.php',
));
