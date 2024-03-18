<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email; // cette ligne devient inutile
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\AjoutType;
use App\Form\GenreType;
use App\Form\TypeDeLivreType;
use App\Entity\Livre;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\Ajouter;
use App\Entity\Panier;
use App\Entity\Genre;
use App\Entity\Type;
use Symfony\Component\HttpFoundation\JsonResponse;




class BaseController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(EntityManagerInterface $entityManagerInterface ): Response
    {
        $repoLivre = $entityManagerInterface->getRepository(Livre::class);
        $livre = $repoLivre->findAll();

        $repoGenre = $entityManagerInterface->getRepository(Genre::class);
        $genre = $repoGenre->findAll();

        return $this->render('base/index.html.twig', [
            'livre'=>$livre,
            'genre'=>$genre,    
        ]);
    }

    #[Route('/contact', name: 'contact')] // étape 1
    public function contact(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManagerInterface): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isSubmitted()&&$form->isValid()){
                $email = (new TemplatedEmail())
                ->from($contact->getEmail())
                ->to('cheztristan@gmail.com')
                ->subject($contact->getSujet())
                ->htmlTemplate('emails/email.html.twig')
                ->context([
                    'nom'=> $contact->getNom(),
                    'sujet'=> $contact->getSujet(),
                    'message'=> $contact->getMessage()
                ]);
              
                $entityManagerInterface->persist($contact);
                $entityManagerInterface->flush();

                $mailer->send($email);
                $this->addFlash('notice','Message envoyé');
                return $this->redirectToRoute('contact');
               
            }
        }

        return $this->render('base/contact.html.twig', [ // étape 3
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/private-ajout', name: 'ajout')]
    public function ajout(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManagerInterface): Response
    {
        $livre= new Livre();

        $form = $this->createForm(AjoutType::class,$livre);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $fichier = $form->get('Couverture')->getData();
                
                if($fichier){
                 $nomFichier = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);
                 $nomFichier = $slugger->slug($nomFichier);
                 $nomFichier = $nomFichier.'-'.uniqid().'.'.$fichier->guessExtension();
                    try{                 
                        $fichier->move($this->getParameter('file_directory'), $nomFichier);
                        $this->addFlash('notice', 'Fichier envoyé');
                    }
                    catch(FileException $e){
                        $this->addFlash('notice', 'Erreur d\'envoi');
                    }        
                }
                $livre->setCouverture($nomFichier);
                $entityManagerInterface->persist($livre);
                $entityManagerInterface->flush();

                return $this->redirectToRoute('ajout');
            }
        }

        return $this->render('base/ajout.html.twig', [
            'form' => $form->createView()
        ]);
    } 

    #[Route('/favorie/{id}', name: 'favorie')] // étape 1
    public function favorie(Request $request, EntityManagerInterface $entityManagerInterface): Response // étape 2
    {
        $id=$request -> get('id');
        $action = $request -> get('action');
        $livre=$entityManagerInterface->getRepository(Livre::class)->find($id);

        if($action == 'ajouter'){
            $this->getUser()->addFavory($livre);
        }
        if($action == 'supprimer'){
            $this->getUser()->removeFavory($livre);
        }

        $entityManagerInterface->persist($this->getUser());
        $entityManagerInterface->flush();

        return $this->render('base/mes-favorie.html.twig', [ // étape 3
            
        ]);
    } 

    #[Route('/mes-favorie', name: 'mes-favorie')] // étape 1
    public function mesFavorie(): Response // étape 2
    {
        $user = $this->getuser();
        $favorie = $user->getFavories();

        return $this->render('base/mes-favorie.html.twig', [ // étape 3
            'favorie' => $favorie,
            
        ]);
    }

    #[Route ('/detail/{id}', name: 'detail')]
    public function detail(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $id=$request -> get('id');
        $livre = $entityManagerInterface ->getRepository(Livre::class)->find($id);

        if (!$livre) {
            throw $this->createNotFoundException(
                'Aucun article trouvé pour l\'id '.$id
            );
        }

        return $this->render('base/detail.html.twig', [
            'livre' => $livre,
        ]);
    }

    #[Route('/monPanier', name: 'monPanier')] // étape 1
    public function monPanier(Request $request, EntityManagerInterface $entityManagerInterface): Response // étape 2
    {
        $repoLivre = $entityManagerInterface->getRepository(Livre::class);
        $livre = $repoLivre->findAll();

        return $this->render('base/monPanier.html.twig', [ // étape 3
            'livres' => $livre,
            
        ]);
    }

    #[Route('/ajoutPanier/{id}', name:'ajoutPanier')]
    public function ajoutPanier(Request $request, EntityManagerInterface $entityManagerInterface): Response        
    {
        $id = $request->get('id');
        $user = $this->getUser();
        $panier = $user->getPanier();

        if ($panier === null) {
            $panier = new Panier();
            $user->setPanier($panier);
            $entityManagerInterface->persist($panier);
        }

        $ajouter = new Ajouter();
        $livre= $entityManagerInterface->getRepository(Livre::class)->find($id);
        if ($livre != null) {
            $ajouter -> setLivre($livre);
            $ajouter -> setPanier($panier);
            $entityManagerInterface->persist($ajouter);
        }

        $entityManagerInterface->persist($user);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('index');
            
    }

    #[Route('/supprimerPanier/{id}', name: 'supp-panier')]
    public function supprimerPanier($id, EntityManagerInterface $entityManagerInterface): Response
    {
        $ajouter = $entityManagerInterface->getRepository(Ajouter::class)->find($id);

        if ($ajouter) {
            $entityManagerInterface->remove($ajouter);
            $entityManagerInterface->flush();
        }

        return $this->redirectToRoute('monPanier');
    }

    #[Route('/faq', name: 'faq')] // étape 1
    public function faq(): Response // étape 2
    {
        return $this->render('base/faq.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/mentionslegales', name: 'mentionslegales')] // étape 1
    public function mentionslegales(): Response // étape 2
    {
        return $this->render('base/mentionslegales.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/cgu', name: 'cgu')] // étape 1
    public function cgu(): Response // étape 2
    {
        return $this->render('base/cgu.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/charte', name: 'charte')] // étape 1
    public function charte(): Response // étape 2
    {
        return $this->render('base/charte.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/private-ajoutDeGenre', name: 'ajoutDeGenre')]
    public function ajoutDeGenre(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
       $genre = new Genre();

       $form = $this->createForm(GenreType::class, $genre);

       if($request->isMethod('POST')) {
           $form->handleRequest($request);
           if($form->isSubmitted()&&$form->isValid()){
               $entityManagerInterface->persist($genre);
               $entityManagerInterface->flush();

               return $this->redirectToRoute('ajoutDeGenre');
           }
           
       }
       return $this->render('detailslivre/ajoutGenre.html.twig', [
        'form' => $form->createView(),
        'genre' => $genre,
    ]);
    } 

    #[Route('/private-ajoutDeType', name: 'ajoutDeType')]
    public function ajoutDeType(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
       $type = new Type();

       $form = $this->createForm(TypeDeLivreType::class, $type);

       if($request->isMethod('POST')) {
           $form->handleRequest($request);
           if($form->isSubmitted()&&$form->isValid()){
               $entityManagerInterface->persist($type);
               $entityManagerInterface->flush();

               return $this->redirectToRoute('ajoutDeType');
           }
           
       }
       return $this->render('detailslivre/ajoutType.html.twig', [
        'form' => $form->createView(),
        'type' => $type,
    ]);
    } 
    
    #[Route('/BD', name: 'BD')]
    public function BD(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'BD')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/bd.html.twig', [
            'livre' => $livres
        ]);
    }

    #[Route('/roman', name: 'roman')]
    public function roman(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'roman')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/roman.html.twig', [
            'livre' => $livres
        ]);
    }

    #[Route('/classique', name: 'classique')]
    public function classique(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'classique')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/classique.html.twig', [
            'livre' => $livres
        ]);
    }

    #[Route('/manga', name: 'manga')]
    public function manga(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'manga')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/manga.html.twig', [
            'livre' => $livres
        ]);
    }

    #[Route('/mythe', name: 'mythe')]
    public function mythe(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'mythe')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/mythe.html.twig', [
            'livre' => $livres
        ]);
    }

    #[Route('/poesie', name: 'poesie')]
    public function poesie(EntityManagerInterface $entityManager): Response
    {
        $livres = $entityManager->getRepository(Livre::class)->createQueryBuilder('l')
            ->join('l.type', 't')
            ->where('t.nomType = :type')
            ->setParameter('type', 'poesie')
            ->getQuery()
            ->getResult();
        
        return $this->render('types/poesie.html.twig', [
            'livre' => $livres
        ]);
    }



} 

