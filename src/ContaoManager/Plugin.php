<?php

declare(strict_types=1);

/*
 *
 * (c) Kreadiv
 *
 * @license LGPL-3.0-or-later
 */

namespace Kreadiv\ContaoCopyrightBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Kreadiv\ContaoCopyrightBundle\ContaoCopyrightBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCopyrightBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
