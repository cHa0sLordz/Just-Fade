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
$GLOBALS['TL_LANG']['tl_justFade']['alias']                         = array('Alias', 'This alias is a unique reference to the Just-Fade which can be called instead of its numeric ID.');
$GLOBALS['TL_LANG']['tl_justFade']['width']                         = array('Width', 'width of slider panel.');
$GLOBALS['TL_LANG']['tl_justFade']['height']                        = array('Height', 'height of slider panel.');
$GLOBALS['TL_LANG']['tl_justFade']['delay']                         = array('Delay', 'delay between images in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['delay']                        = array('Delay beetwen squares', 'delay beetwen squares in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['fadeSpeed']                    = array('Speed of title appearance', 'speed of title appearance in ms.');
$GLOBALS['TL_LANG']['tl_justFade']['links']                         = array('Links', 'show images as links.');
$GLOBALS['TL_LANG']['tl_justFade']['shuffleImageOrder'] = array('Random order', 'Random displayorder of the pictures.');
$GLOBALS['TL_LANG']['tl_justFade']['published']                     = array('Publish slideshow', 'Make the slideshow visible on the website.');

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
$GLOBALS['TL_LANG']['tl_justFade']['new']        = array('New Just-Fade', 'Create a new slideshow');
$GLOBALS['TL_LANG']['tl_justFade']['edit']       = array('Edit Just-Fade pictures', 'Edit pictures of this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['editheader'] = array('Edit Just-Fade', 'Edit this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['copy']       = array('Duplicate Just-Fade', 'Duplicate this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['delete']     = array('Delete Just-Fade', 'Delete this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['toggle']     = array('Publish/unpublish slideshow', 'Publish/unpublish this slideshow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['show']       = array('Just-Fade details', 'Show the details of this slideshow ID %s');

/**
 * Labels
 */
$GLOBALS['TL_LANG']['tl_justFade']['pictures'] = 'pictures';
?>