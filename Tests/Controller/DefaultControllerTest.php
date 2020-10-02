<?php

namespace Fairlane\CookieConsentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertStringContainsString('Hello World', $client->getResponse()->getContent());
    }
}
