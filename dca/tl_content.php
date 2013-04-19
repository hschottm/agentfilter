<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    agentfilter
 * @license    LGPL
 */

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $value)
{
	if (!is_array($value))
	{
		$GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(';{expert_legend', ';{agent_legend:hide},agent,agent_filter;{expert_legend', $value);
	}
}

/**
 * Table tl_content 
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['agent'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['agent'],
	'exclude'                 => true,
	'search'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'long'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['agent_filter'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['agent_filter'],
	'default'                 => '0',
	'exclude'                 => true,
	'inputType'               => 'radio',
	'options'                 => array('0', '1', '2'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['filter_action'],
	'sql'                     => "char(1) NOT NULL default ''"
);

?>