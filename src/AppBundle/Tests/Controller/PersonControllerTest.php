<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PersonControllerTest extends WebTestCase
{
    public function testNewperson()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newPerson');
    }

    public function testModify()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '{id}');
    }

    public function testShowall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAll');
    }

    public function testShowperson()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '{id}');
    }

}
