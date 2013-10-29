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
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\JustFade'        => 'system/modules/just_fade/classes/JustFade.php',

	// Elements
	'Contao\ContentJustFade' => 'system/modules/just_fade/elements/ContentJustFade.php',

	// Modules
	'Contao\ModuleJustFade'  => 'system/modules/just_fade/modules/ModuleJustFade.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'justFade' => 'system/modules/just_fade/templates',
));