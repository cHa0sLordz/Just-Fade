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
$GLOBALS['TL_LANG']['tl_justPictures']['name']        = array('Name', 'Please enter a picture name.');
$GLOBALS['TL_LANG']['tl_justPictures']['singleSRC']   = array('Source file', 'Please select a file from the files directory.');
$GLOBALS['TL_LANG']['tl_justPictures']['alt']         = array('Alternate text', 'An accessible website should always provide an alternate text for images and movies with a short description of their content.');
$GLOBALS['TL_LANG']['tl_justPictures']['imageUrl']    = array('Image link target', 'Associate a page with an image. You must activate the option “links” in the preferences of this Just-Fades. For external links, don\'t forget "http://".');
$GLOBALS['TL_LANG']['tl_justPictures']['published']   = array('Publish picture', 'Make the picture visible on the slideshow.');
$GLOBALS['TL_LANG']['tl_justPictures']['start']   = array('Show from', 'Do not show the picture on the website before this day.');
$GLOBALS['TL_LANG']['tl_justPictures']['stop']   = array('Show until', 'Do not show the picture on the website after this day.');
$GLOBALS['TL_LANG']['tl_justPictures']['size']        = array('Image width and height', 'Here you can set the image dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_justPictures']['description'] = array('Image description', 'Here you can enter a short text that will be displayed below the image.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_justPictures']['picture_legend']  = 'Picture';
$GLOBALS['TL_LANG']['tl_justPictures']['name_legend']     = 'Name';
$GLOBALS['TL_LANG']['tl_justPictures']['publish_legend']  = 'Publish';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_justPictures']['new']    = array('New picture', 'Create a new picture');
$GLOBALS['TL_LANG']['tl_justPictures']['edit']   = array('Edit picture', 'Edit picture ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['copy']   = array('Duplicate picture', 'Duplicate picture ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['cut']    = array('Move picture', 'Move picture ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['delete'] = array('Delete picture', 'Delete picture ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['toggle'] = array('Publish/unpublish picture', 'Publish/unpublish picture ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['show']   = array('Picture details', 'Show the details of picture ID %s');

/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_justPictures']['descriptionBE'] = 'Description:';
?>