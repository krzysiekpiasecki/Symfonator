<?php
namespace App;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


/**
 * Class AdminControllerTest
 * @package App
 * @coverClass \App\Controller\AdminController
 */
class AdminControllerTest extends WebTestCase
{
    /**
     * Test if application redirect to login page
     */
    public function testRedirectToLoginPage() {
        $client = static::createClient();
        $client->request('GET', '/admin');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getCrawler()->filter("h4")->first()->text() === "Login");
    }


    /**
     * @dataProvider listURL
     * @param $url
     */
    public function testSmoke($url) {
        $client = $this->logIn(static::createClient());
        $client->request('GET', $url);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * Provide data for {@link testSmoke}.
     *
     * @return \Generator
     */
    public function listURL() {
        yield ['admin/compose'];
    }

    /**
     * @param Client $client
     * @return Client
     */
    private function logIn(Client $client): Client {
        return $client;
    }
}
