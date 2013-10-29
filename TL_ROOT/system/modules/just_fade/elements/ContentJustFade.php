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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class ContentJustFade
 *
 * @copyright  TheG33k
 * @author     TheG33k
 * @package    Controller
 */
class ContentJustFade extends \ContentElement {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'justFade';

    public function generate() {

        if (TL_MODE == 'FE') {

            $GLOBALS['TL_CSS'][] = 'system/modules/just_fade/assets/css/just-fade.css';
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/just_fade/assets/js/just-fade.js|static';
        }
        return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile() {
        $this->Template = new \FrontendTemplate('justFade');
        $this->import('Database');
        $justFade = new JustFade();
        $justFade->compileListPicturesTemplate($this->Database,$this->select_justFade, $this->Template);
    }
}
?>