<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    /*
    * Fonction permettant d'afficher la page d'accueil
    * @Route("/", name="app_home")
    * @return Response
    */
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /*
    * Fonction permettant d'afficher la liste des produits
    * @Route("/", name="app_product")
    * @return Response
    */
    #[Route('/products', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('pages/product.html.twig');
    }
}
