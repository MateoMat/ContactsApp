<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhoneControllerTest extends WebTestCase
{
    public function testAddphone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPhone');
    }

    public function testEditphone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editPhone/{id}');
    }

    public function testDeletephone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePhone/{id}');
    }

}
