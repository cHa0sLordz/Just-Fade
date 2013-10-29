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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['justFade'] = '{title_legend},name,type,headline;{select_justFade_legend},select_justFade;{config_legend},align,space,cssID';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['select_justFade'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['select_justFade'],
    'exclude'                 => true,
    'inputType'               => 'radio',
    'foreignKey'              => 'tl_justFade.title',
    'eval'                    => array('mandatory'=>true)
);
?>