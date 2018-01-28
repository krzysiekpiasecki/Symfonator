<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @package App\Tests
 * @coverClass \App\Controller\AppController
 */
class AppControllerTest extends WebTestCase
{

    /**
     * @covers ::index()
     */
    public function testRedirectToAdminPage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getCrawler()->filter("h4")->first()->text() === "Login");
    }
}
