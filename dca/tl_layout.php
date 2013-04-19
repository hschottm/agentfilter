<?php

/**
 * @copyright  Helmut Schottmüller 2009-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/agentfilter>
 * @package    agentfilter
 * @license    LGPL
 */


$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('template,', 'template,agent,agent_template,', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

/**
 * Table tl_content 
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['agent'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['agent'],
	'exclude'                 => true,
	'search'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'long clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['agent_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['agent_template'],
	'exclude'                 => true,
	'filter'                  => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 11,
	'inputType'               => 'select',
	'options_callback'        => array('tl_layout', 'getPageTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

?>