<?php

namespace App\tests\Service;

use App\Entity\Recipe;
use App\Service\RecipeService;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\Container;

class RecipeServiceTest extends KernelTestCase
{
    /** @var EntityManager */
    private $em;

    public function setUp()
    {
        $kernel = self::bootKernel();

        $this->em = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager');
    }

    /**
     * We test that getRecipes return Recipe[] with a title and a subtitle
     * By accessing directly database and rows from table recipes which
     * were inserted by HautelookAlice
     */
    public function testGetRecipesEmpty()
    {
        $recipeService = new RecipeService($this->em);

        $recipes = $recipeService->getRecipes();

        /** @var Recipe $recipe */
        foreach ($recipes as $recipe) {
            $this->assertEquals($recipe instanceof Recipe, true);
            $this->assertNotEmpty($recipe->getTitle());
            $this->assertNotEmpty($recipe->getSubtitle());
        }
    }
}