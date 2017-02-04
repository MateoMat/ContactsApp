<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddresControllerTest extends WebTestCase
{
    public function testNewaddres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newAddres');
    }

    public function testEditaddres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editAddres/{id}');
    }

    public function testDeleteaddres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAddres{id}');
    }

    public function testShowalladdres()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllAddres');
    }

}
