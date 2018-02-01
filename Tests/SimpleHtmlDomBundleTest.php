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

use Martyrer\SimpleHtmlDomBundle\Tests\WebTestCase;

class SimpleHtmlDomBundleTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();
        $container = $client->getContainer();
        
        $parser = $container->get('simple_html_dom');   
        
        $this->assertTrue($parser instanceof \simple_html_dom);
    }
}
