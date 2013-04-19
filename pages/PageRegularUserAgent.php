<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    agentfilter
 * @license    LGPL
 */

namespace Contao;

/**
 * Class PageRegularUserAgent
 *
 * Provide methods to handle a regular front end page.
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    Controller
 */
class PageRegularUserAgent extends PageRegular
{
	/**
	 * Get a page layout and return it as database result object
	 * @param integer
	 * @return object
	 */
	protected function getPageLayout($intId)
	{
		$objLayout = parent::getPageLayout($intId);
		if (strlen($objLayout->agent) > 0)
		{
			$found = (preg_match("/" . $objLayout->agent . "/", $_SERVER['HTTP_USER_AGENT'], $matches)) ? true : false;
			if ($found)
			{
				$objLayout->template = $objLayout->agent_template;
			}
		}
		return $objLayout;
	}
}

?>