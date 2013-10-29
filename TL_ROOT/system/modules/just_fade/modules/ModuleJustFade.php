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
 * Class ModuleJustFade
 *
 * @copyright  TheG33k
 * @author     TheG33k
 * @package    Controller
 */
class ModuleJustFade extends \Module {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'justFade';

    /**
     * Display a wildcard in the back end
     *
     * @access public
     * @return string
     */
    public function generate() {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### MODULE JUST FADE ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

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