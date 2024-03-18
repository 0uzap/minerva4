<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FaqFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}

/*
 * Créer les fixtures avec une entité FAQ contenant id, question, réponse dont les questions seront posées par les utilisateurs et les réponses postées par les administrateurs.
 * Accordéon pour afficher la question et dès qu'on clique dessus, ça affiche la réponse. (le faire en JS)
 * */ 