<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RecipeControllerTest extends WebTestCase
{
    /**
     * Check controller response on /api/recipes
     */
    public function testGetRecipes()
    {
        $client = static::createClient();

        $client->request('GET', '/api/recipes');

        // Check HTTP 200
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        // Check not empty response
        $recipes = json_decode($client->getResponse()->getContent(), true);
        $this->assertNotEmpty($recipes);

        // Check response structure
        foreach ($recipes as $recipe) {
            $this->assertEquals(array_keys($recipe), ['id', 'title', 'subtitle']);
        }
    }
}