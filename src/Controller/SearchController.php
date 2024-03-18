<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livre;
use App\Form\LivreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'search')]
    public function rechercheLivre(EntityManagerInterface $entityManagerInterface,Request $request): Response
    {
    $research = $request->query->get('q');
        if ($research == "") {
            return $this->redirectToRoute('index');
        }else{
            $repoLivre = $entityManagerInterface->getRepository(Livre::class);
            $query = $entityManagerInterface->createQuery('SELECT l FROM App\Entity\Livre l WHERE l.titre LIKE :research')->setParameter('research', '%'.$research.'%');
            $livre = $query->getResult();
        
            return $this->render('livre/recherche.html.twig', [
                'livres' => $livre,
                'query' => $research,
            ]);
        }    
    }
}
