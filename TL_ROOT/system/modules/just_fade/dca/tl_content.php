<?php

/**
 * Just Fade
 * jQuery Image Slider for Contao
 *
 * @author    TheG33k
 * @copyright TheG33k
 * @package   justFade
 * @license   Creative Commons (http://creativecommons.org/licenses/by-nc-sa/3.0/deed.de)
 */

/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['justFade'] = '{type_legend},type,headline;{select_justFade_legend},select_justFade;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['select_justFade'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['select_justFade'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'foreignKey'              => 'tl_justFade.title',
	'eval'                    => array('mandatory'=>true)
);
?>