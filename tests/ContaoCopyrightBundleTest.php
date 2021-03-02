<?php

declare(strict_types=1);

/*
 *
 * (c) Kreadiv
 *
 * @license LGPL-3.0-or-later
 */

namespace Kreadiv\ContaoCopyrightBundle\Tests;

use Kreadiv\ContaoCopyrightBundle\ContaoCopyrightBundle;
use PHPUnit\Framework\TestCase;

class ContaoCopyrightBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoCopyrightBundle();

        $this->assertInstanceOf('Kreadiv\ContaoCopyrightBundle\ContaoCopyrightBundle', $bundle);
    }
}
