<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  TheG33k
 * @author     TheG33k
 * @package    justFade 
 * @license    Creative Commons (http://creativecommons.org/licenses/by-nc-sa/3.0/deed.de) 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_justFade']['title'] = array('Titel', 'Bitte den Titel der Diashow eingeben.');
$GLOBALS['TL_LANG']['tl_justFade']['alias'] = array('Alias', 'Der Alias ist eine eindeutige Referenz auf den Just-Fade und kann anstatt der ID benutzt werden.');
$GLOBALS['TL_LANG']['tl_justFade']['width'] = array('Breite', 'Breite der Diashow.');
$GLOBALS['TL_LANG']['tl_justFade']['height'] = array('Höhe', 'Höhe der Diashow.');

$GLOBALS['TL_LANG']['tl_justFade']['delay'] = array('Anzeigedauer je Bild', 'Zeit in ms wie lange jedes einzelne Bild angezeigt wird.');
$GLOBALS['TL_LANG']['tl_justFade']['fadeSpeed'] = array('Animationsdauer', 'Zeit in ms für die Animation des Übergangs.');
$GLOBALS['TL_LANG']['tl_justFade']['links'] = array('Links', 'Bilder verlinken.');
$GLOBALS['TL_LANG']['tl_justFade']['shuffleImageOrder'] = array('Zufällige Reinfolge', 'Zufällige Reinfolge der Bilder.');
$GLOBALS['TL_LANG']['tl_justFade']['published']   = array('Veröffentlichen', 'Die Diashow auf der Website veröffentlichen (sichtbar schalten).');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_justFade']['size_legend'] = 'Höhe und Breite';
$GLOBALS['TL_LANG']['tl_justFade']['behavior_legend'] = 'Behavior';
$GLOBALS['TL_LANG']['tl_justFade']['preferences_legend'] = 'Eigenschaften';
$GLOBALS['TL_LANG']['tl_justFade']['publish_legend']   = 'Veröffentlichung';
$GLOBALS['TL_LANG']['tl_justFade']['title_legend']   = 'Titel und Alias';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_justFade']['new']    = array('Neuer Just-Fade', 'Erzeugt eine neue Diashow');
$GLOBALS['TL_LANG']['tl_justFade']['edit']   = array('Bearbeite Just-Fade Bilder', 'Bearbeiten Sie die Bilder der Diashow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['editheader']   = array('Bearbeite Just-Fade', 'Bearbeiten Sie die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['copy']   = array('Dupliziere Just-Fade', 'Erstellt eine Kopie von Diashow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['delete'] = array('Lösche Just-Fade', 'Löscht die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['toggle'] = array('Veröffentl./Unveröffentl. Just-Fade', 'Veröffentlicht/Unveröffentlicht die Diashow ID %s');
$GLOBALS['TL_LANG']['tl_justFade']['show']   = array('Just-Fade Details', 'Zeige Details von Diashow ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_justFade']['pictures'] = 'Bilder';
?>
