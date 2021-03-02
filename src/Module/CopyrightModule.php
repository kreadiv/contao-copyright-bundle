<?php

namespace Kreadiv\ContaoCopyrightBundle\Module;

class CopyrightModule extends \Module
{

    /**
     * @var string
     */
    protected $strTemplate = 'mod_copyright';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function compile()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### ' . $GLOBALS['TL_LANG']['FMD']['copyright'][0] . ' ###';
            return $objTemplate->parse();
        }

        return parent::generate();
    }

}
