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
 * Class JustFade
 *
 * @copyright  TheG33k
 * @author     TheG33k
 * @package    Controller
 */
class JustFade extends \Frontend {

    /**
     * Compiles the data for the list template
     *
     * @access public
     * @return null
     */
    public function compileListPicturesTemplate($database, $select_justFade, $template) {

        // Test if the slideshow has pictures
        $ifPictures = true;

        $objSlider = $database->prepare("SELECT * FROM tl_justFade WHERE id=? AND published=1")
                ->limit(1)
                ->execute($select_justFade);

        // Retrieve the current slideshow pictures
        $objPictures = $database->prepare("SELECT * FROM tl_justPictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($select_justFade);

        if ($objSlider->numRows > 0) {
            while ($objSlider->next()) {
                $arrSlider[] = $objSlider->row();
            }
            $preferences = array_values($arrSlider);
            $template->preferences = $preferences;
        }

        if ($objPictures->numRows > 0) {
            while ($objPictures->next()) {
                if (TL_MODE == 'FE' && (($objPictures->start > 0 && $objPictures->start > time()) || ($objPictures->stop > 0 && $objPictures->stop < time())))
        {
            unset($arrPictures[$objPictures->id]);
        }
        else {
                $imgSize = deserialize($objPictures->size);
                $objFile = \FilesModel::findByPk($objPictures->singleSRC);
                $srcImage = \Image::get($this->urlEncode($objFile->path), $imgSize[0], $imgSize[1], $imgSize[2]);
                $arrPictures[$objPictures->id] = array(
                    'description' => $objPictures->description,
                    'alt'         => $objPictures->alt,
                    'imageUrl'    => $objPictures->imageUrl,
                    'singleSRC'   => $srcImage,
                    'name'        => $objPictures->name
                );
            }
        }

            $pictures = array_values($arrPictures);
            $template->pictures = $pictures;
            $template->ifPictures = $ifPictures;
        } else {
            $ifPictures = false;
            $template->ifPictures = $ifPictures;
        }
    }
}
?>