<?php

/*
 * This file is part of the MartyrerSimpleHtmlDomBundle.
 *
 * Edoardo Rivello <edoardo.rivello@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Martyrer\SimpleHtmlDomBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MartyrerSimpleHtmlDomBundleTest extends KernelTestCase
{
    public function testRegister()
    {
        $parser = static::bootKernel()->getContainer()->get('simple_html_dom');
        
        $this->assertTrue($parser instanceof \simple_html_dom);
    }
}
