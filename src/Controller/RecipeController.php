<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends FOSRestController
{
    /**
     * @Route("/api/recipes", name="recipe")
     * @Method("GET")
     */
    public function getRecipesAction()
    {
        return $this->get('app.recipe')->getRecipes();
    }
}