<?php

namespace Kreadiv\ContaoCopyrightBundle\Module;

/**
 * Legacy Contao 4 Module Class
 *
 * This class is deprecated in Contao 5.
 * Use CopyrightController instead: src/Controller/FrontendModule/CopyrightController.php
 *
 * @deprecated Use CopyrightController instead
 */
class CopyrightModule extends \Contao\Module
{
    protected $strTemplate = 'mod_copyright';

    /**
     * Empty compile method for Contao 5 compatibility
     * The actual logic is now in CopyrightController
     */
    public function compile()
    {
        // Logic moved to Controller in Contao 5
    }
}
