<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/articles');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testCreate()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/articles',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            '{"title":"Test Create Article title",
            "content":"Simple test create article content with blabla....."}'
        );

        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $client->request(
            'PUT',
            '/articles/1',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            '{"title":"Test Update Article with id 1",
            "content":"Simple test update article content with id 1....."}'
        );
        $this->assertEquals(204, $client->getResponse()->getStatusCode());


    }

    public function testUpdateFail()
    {
        $client = static::createClient();

        $client->request(
            'PUT',
            '/articles/100',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            '{"title":"Test Update Article with id 1",
            "content":"Simple test update article content with id 1....."}'
        );
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $this->assertContains('Id not found or invalid !', $client->getResponse()->getContent());

    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('DELETE', '/articles/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }


}

