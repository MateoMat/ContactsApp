<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmailControllerTest extends WebTestCase
{
    public function testAddemail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addEmail');
    }

    public function testEditemail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editEmail/{id}');
    }

    public function testDeleteemail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteEmail/{id}');
    }

}
