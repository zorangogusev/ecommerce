<?php

namespace App\Tests\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    private $entityManager;
    private $client;

    public function setUp() : void
    {
        $this->client = static::createClient();
        $this->entityManager = $this->client
            ->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function test_check_that_action_index_return_200_response()
    {
        $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function test_check_that_action_index_return_exact_h1_text()
    {
        $this->client->request('GET', '/');
        $this->assertSelectorTextContains('h1', 'NEW');
    }
    public function test_check_that_action_index_return_exact_h1_text1()
    {
        $response = $this->client->request('GET', '/');
        $this->assertStringContainsString('NEW', $response->text());
    }

    public function test_check_that_action_view_return_200_response()
    {
        $productRepository = $this->entityManager->getRepository(Product::class);
        $product = $productRepository->findOneBy([]);
        $this->client->request('GET', '/view/' . $product->getId());

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
}