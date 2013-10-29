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
$GLOBALS['TL_LANG']['tl_justPictures']['name']        = array('Name', 'Bitte geben Sie dem Bild einen Namen.');
$GLOBALS['TL_LANG']['tl_justPictures']['singleSRC']   = array('Quell-Datei', 'Bitte wählen Sie eine Datei aus dem Verzeichnisbaum.');
$GLOBALS['TL_LANG']['tl_justPictures']['alt']         = array('Alternativer Text', 'Eine barrierefreie Webseite sollte immer einen alternativen Text für Bilder und Filme mit einer kurzen Beschreibung deren Inhalt enthalten.');
$GLOBALS['TL_LANG']['tl_justPictures']['imageUrl']    = array('Bildlink-Adresse', 'Verknüpfen Sie das Bild mit einer Seite. Die Option "Links" in den Eigenschaften dieses Just-Fades muss dazu aktiviert sein. Externe Links benötigen den Prefix "http://".');
$GLOBALS['TL_LANG']['tl_justPictures']['published']   = array('Bild veröffentlichen', 'Dieses Bild in der Diashow anzeigen.');
$GLOBALS['TL_LANG']['tl_justPictures']['start']   = array('Anzeigen ab', 'Das Bild erst ab diesem Tag auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_justPictures']['stop']   = array('Anzeigen bis', 'Das Bild nur bis zu diesem Tag auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_justPictures']['size']        = array('Bild-Breite und -Höhe', 'Hier können Sie die Bildabmessungen und den Zuschneide-Modus einstellen.');
$GLOBALS['TL_LANG']['tl_justPictures']['description'] = array('Bildbeschreibung', 'Hier können Sie einen kurzen Text eingeben, welcher unterhalb des Bildes angezeigt wird.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_justPictures']['picture_legend'] = 'Bild';
$GLOBALS['TL_LANG']['tl_justPictures']['name_legend']    = 'Name';
$GLOBALS['TL_LANG']['tl_justPictures']['publish_legend'] = 'Veröffentlichung';


/**
 * Legends
 */


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_justPictures']['new']    = array('Neues Bild', 'Erstellt ein neues Bild');
$GLOBALS['TL_LANG']['tl_justPictures']['edit']   = array('Bearbeite Bild', 'Bearbeiten Sie das Bild ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['copy']   = array('Dupliziere Bild', 'Erstellt eine Kopie von Bild ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['cut']    = array('Verschiebe Bild', 'Verschieben von Bild ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['delete'] = array('Lösche Bild', 'Lösche das Bild ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['toggle'] = array('Veröffentl./Unveröffentl. Bild', 'Veröffentlicht/Unveröffentlicht das Bild ID %s');
$GLOBALS['TL_LANG']['tl_justPictures']['show']   = array('Bild-Details', 'Zeige Details von Bild ID %s');


/**
 * miscellaneous
 */
$GLOBALS['TL_LANG']['tl_justPictures']['descriptionBE'] = 'Beschreibung:';
?>
