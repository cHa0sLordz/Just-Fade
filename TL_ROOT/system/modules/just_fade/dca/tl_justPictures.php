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
 * Table tl_justPictures
 */
$GLOBALS['TL_DCA']['tl_justPictures'] = array
    (
    // Config
    'config' => array
        (
        'dataContainer'        => 'Table',
        'enableVersioning'     => true,
        'ptable'               => 'tl_justFade',
    ),
    // List
    'list' => array
        (
        'sorting' => array
            (
            'mode' => 4,
            'fields' => array('sorting'),
            'filter' => true,
            'flag' => 11,
            'panelLayout' => 'search,limit',
            'headerFields' => array('title', 'width', 'height', 'spw', 'sph', 'delay', 'sDelay', 'opacity', 'titleSpeed', 'effect', 'navigation', 'showNavigationPrevNext', 'showNavigationButtons', 'navigationPrevNextAlwaysShown', 'prevText', 'nextText', 'links', 'hoverPause', 'published'),
            'child_record_callback' => array('tl_justPictures', 'listPictures')
        ),
        'global_operations' => array
            (
            'all' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'            => 'act=select',
                'class'           => 'header_edit_all',
                'attributes'      => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations' => array
            (
            'edit' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['edit'],
                'href'            => 'act=edit',
                'icon'            => 'edit.gif'
            ),
            'copy' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['copy'],
                'href'            => 'act=copy',
                'icon'            => 'copy.gif'
            ),
            'cut' => array
            (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['cut'],
                'href'            => 'act=paste&amp;mode=cut',
                'icon'            => 'cut.gif'
            ),
            'delete' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['delete'],
                'href'            => 'act=delete',
                'icon'            => 'delete.gif',
                'attributes'      => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'toggle' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['toggle'],
                'icon'            => 'visible.gif',
                'attributes'      => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                'button_callback' => array('tl_justPictures', 'toggleIcon')
            ),
            'show' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_justPictures']['show'],
                'href'            => 'act=show',
                'icon'            => 'show.gif'
            )
        )
    ),
    // Palettes
    'palettes' => array
        (
        '__selector__' => array(''),
        'default' => '{name_legend},name;{picture_legend},singleSRC,description,alt,imageUrl,size;{publish_legend},start,stop,published'
    ),
    // Fields
    'fields' => array
        (
        'name' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50')
        ),
        'description' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['description'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('rte'=>'tinyMCE', 'helpwizard'=>true),
            'explanation'             => 'insertTags'
        ),
        'singleSRC' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['singleSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType' => 'radio', 'files' => true, 'filesOnly' => true, 'mandatory' => true)
        ),
        'size' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['size'],
            'exclude'                 => true,
            'inputType'               => 'imageSize',
            'options'                 => (version_compare(VERSION.'.'.BUILD, '2.11.0', '>=') ? $GLOBALS['TL_CROP'] : array('crop', 'proportional', 'box')),
            'reference'               => &$GLOBALS['TL_LANG']['MSC'],
            'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
        ),
        'alt' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['alt'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50')
        ),
        'imageUrl' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['imageUrl'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
            'wizard' => array
            (
                    array('tl_justPictures', 'pagePicker')
            )
        ),
        'published' => array
            (
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'flag'                    => 2,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy' => true, 'tl_class' => 'w50 m12')
        ),
        'start' => array
        (
            'exclude'                 => true,
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['start'],
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        ),
        'stop' => array
        (
            'exclude'                 => true,
            'label'                   => &$GLOBALS['TL_LANG']['tl_justPictures']['stop'],
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        )
    )
);

/**
 * Class tl_justPictures
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_justPictures extends Backend {

    /**
     * Add the type of input field
     *
     * @param array
     * @return string
     */
    public function listPictures($arrRow) {

        $key = ($arrRow['published']) ? 'published' : 'unpublished';
        $objFile = FilesModel::findByUuid($arrRow['singleSRC']);
        $image = Image::get($objFile->path, 150, 150, 'center_center');

        return '
            <div class="cte_type ' . $key . '" style="color:#444;"> ' . $arrRow['name'] . '</div>
            <div class="limit_height h64 block' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h52' : '') . ' block">'
            . '<div style="float: left; margin-right: 10px;"><img src="' . $image .'" /></div>'
            . '<strong>' . $GLOBALS['TL_LANG']['tl_justPictures']['descriptionBE'] . '</strong><br />' .  $arrRow['description'] .
            '</div>' . "\n";
    }

    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes) {

        if (strlen(Input::get('tid'))) {

            $this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

        if (!$row['published']) {

            $icon = 'invisible.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . $this->generateImage($icon, $label) . '</a> ';
    }

    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible) {

        $this->createInitialVersion('tl_justPictures', $intId);

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_justPictures']['fields']['published']['save_callback'])) {

            foreach ($GLOBALS['TL_DCA']['tl_justPictures']['fields']['published']['save_callback'] as $callback) {

                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_justPictures SET published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                ->execute($intId);

        $this->createNewVersion('tl_justPictures', $intId);
    }
    
    /**
    * Return the link picker wizard
    * @param \DataContainer
    * @return string
    */
   public function pagePicker(DataContainer $dc)
   {
        return ' <a href="contao/page.php?do='.Input::get('do').'&amp;table='.$dc->table.'&amp;field='.$dc->field.'&amp;value='.str_replace(array('{{link_url::', '}}'), '', $dc->value).'" title="'.specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']).'" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\''.$GLOBALS['TL_LANG']['MOD']['page'][0].'\',\'url\':this.href,\'id\':\''.$dc->field.'\',\'tag\':\'ctrl_'.$dc->field . ((Input::get('act') == 'editAll') ? '_' . $dc->id : '').'\',\'self\':this});return false">' . $this->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
   }
}
?>