<?php

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrafficControllerTest extends WebTestCase
{
    public function testApiTrafficRouteShouldReturnsJsonResponse(): void
    {
        // Arrange
        $client = static::createClient();

        // Act
        $client->request('GET', '/api/traffic');

        // Assert
        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('Content-Type', 'application/json');
    }

    public function testApiTrafficShouldReturnsExpectedData(): void
    {
        // Arrange
        $client = static::createClient();
        $expectedData = [
            ['id' => 1, 'page_url' => '/home', 'traffic' => '125'],
            ['id' => 2, 'page_url' => '/about', 'traffic' => '80'],
            ['id' => 3, 'page_url' => '/products', 'traffic' => '300'],
            ['id' => 4, 'page_url' => '/contact', 'traffic' => '45'],
            ['id' => 5, 'page_url' => '/blog', 'traffic' => '450'],
        ];

        // Act
        $client->request('GET', '/api/traffic');

        // Assert
        $responseContent = $client->getResponse()->getContent();
        $this->assertJson($responseContent);
        $this->assertSame($expectedData, json_decode($responseContent, true));
    }

    public function testInvalidRouteReturns404(): void
    {
        // Arrange
        $client = static::createClient();

        // Act
        $client->request('GET', '/api/traffic-route');

        // Assert
        $this->assertResponseStatusCodeSame(404);
    }
}