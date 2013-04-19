<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    agentfilter
 * @license    LGPL
 */

namespace Contao;

/**
 * Class AgentFilter 
 *
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    Controller
 */
class AgentFilter
{
	public function userAgentCheck($objElement, $strBuffer)
	{
		if (TL_MODE == 'BE')
		{
			return $strBuffer;
		}
		if ($objElement->agent_filter > 0 && strlen($objElement->agent) > 0)
		{
			$found = (preg_match("/" . $objElement->agent . "/", $_SERVER['HTTP_USER_AGENT'], $matches)) ? true : false;
			switch ($objElement->agent_filter)
			{
				case 1:
					if (!$found) $strBuffer = '';
					break;
				case 2:
					if ($found) $strBuffer = '';
					break;
			}
		}
		return $strBuffer;
	}
}

?>