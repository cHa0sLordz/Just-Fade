<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_justFade']['title']                         = array('Title', 'Please enter the slideshow title.');
$GLOBALS['TL_LANG']['tl_justFade']['alias']                         = array('Alias', 'This alias is a unique reference to the Coin Slider which can be called instead of its numeric ID.');
$GLOBALS['TL_LANG']['tl_justFade']['width']                         = array('Width', 'width of slider panel.');
$GLOBALS['TL_LANG']['tl_justFade']['height']                        = array('Height', 'height of slider panel.');
$GLOBALS['TL_LANG']['tl_justFade']['spw']                           = array('Squares per width', 'Number of squares per width.');
$GLOBALS['TL_LANG']['tl_justFade']['sph']                           = array('Squares per height', 'Number of squares per height.');
$GLOBALS['TL_LANG']['tl_justFade']['delay']                         = array('Delay', 'delay between images in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['sDelay']                        = array('Delay beetwen squares', 'delay beetwen squares in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['opacity']                       = array('Opacity', 'opacity of title and navigation. Value between 0 and 1.');
$GLOBALS['TL_LANG']['tl_justFade']['titleSpeed']                    = array('Speed of title appearance', 'speed of title appearance in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['effect']                        = array('Effect', 'All effects or random, swirl, rain, straight.');
$GLOBALS['TL_LANG']['tl_justFade']['navigation']                    = array('Navigation', 'Navigation type text (previous, next) and/or squares.');
$GLOBALS['TL_LANG']['tl_justFade']['links']                         = array('Links', 'show images as links.');
$GLOBALS['TL_LANG']['tl_justFade']['shuffleImageOrder'] = array('Random order', 'Random displayorder of the pictures.');
$GLOBALS['TL_LANG']['tl_justFade']['hoverPause']                    = array('Pause on hover', 'pause on hover.');
$GLOBALS['TL_LANG']['tl_justFade']['published']                     = array('Publish slideshow', 'Make the slideshow visible on the website.');
$GLOBALS['TL_LANG']['tl_justFade']['prevText']                      = array('Previous', 'Text for the previous button.');
$GLOBALS['TL_LANG']['tl_justFade']['nextText']                      = array('Next', 'Text for the next button.');
$GLOBALS['TL_LANG']['tl_justFade']['showNavigationPrevNext']        = array('Show navigation type text (previous and next)', 'Show navigation type text (previous and next).');
$GLOBALS['TL_LANG']['tl_justFade']['showNavigationButtons']         = array('Show navigation type squares', 'Show navigation type squares.');
$GLOBALS['TL_LANG']['tl_justFade']['navigationPrevNextAlwaysShown'] = array('Previous and next are always shown', 'Previous and next are always shown.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_justFade']['all']      = 'All effects';
$GLOBALS['TL_LANG']['tl_justFade']['random']   = 'random';
$GLOBALS['TL_LANG']['tl_justFade']['swirl']    = 'swirl';
$GLOBALS['TL_LANG']['tl_justFade']['rain']     = 'rain';
$GLOBALS['TL_LANG']['tl_justFade']['straight'] = 'straight';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_justFade']['preferences_legend'] = 'Preferences';
$GLOBALS['TL_LANG']['tl_justFade']['publish_legend']     = 'Publish';
$GLOBALS['TL_LANG']['tl_justFade']['title_legend']       = 'Title and alias';
$GLOBALS['TL_LANG']['tl_justFade']['nav_legend']         = 'Navigation';
$GLOBALS['TL_LANG']['tl_justFade']['size_legend']        = 'Width and height';
$GLOBALS['TL_LANG']['tl_justFade']['behavior_legend']    = 'Behavior';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_justFade']['new']        = array('New slideshow', 'Create a new slideshow');
$GLOBALS['TL_LANG']['tl_justFade']['edit']       = array('Edit slideshow pictures', 'Edit pictures of this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['editheader'] = array('Edit slideshow', 'Edit this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['copy']       = array('Duplicate slideshow', 'Duplicate this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['delete']     = array('Delete slideshow', 'Delete this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['toggle']     = array('Publish/unpublish slideshow', 'Publish/unpublish this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['show']       = array('Coin Slider details', 'Show the details of this slideshow ID %s');

/**
 * Labels
 */
$GLOBALS['TL_LANG']['tl_justFade']['pictures'] = 'pictures';
?>