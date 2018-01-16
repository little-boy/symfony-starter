<?php

namespace App\Service;

use Doctrine\ORM\EntityManager;

class RecipeService
{
    /** @var EntityManager  */
    private $em;

    /**
     * RecipeService constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Fetch a list of recipes
     *
     * @return array
     */
    public function getRecipes()
    {
        return $this->em
            ->getRepository('App:Recipe')
            ->findAll();
    }
}
