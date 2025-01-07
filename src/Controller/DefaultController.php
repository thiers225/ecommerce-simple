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
    /*
    * Fonction permettant d'afficher le detail de produit
    * @Route("/", name="app_detail")
    * @return Response
    */
    #[Route('/detail/products', name: 'app_detail')]
    public function detailProduct(): Response
    {
        return $this->render('pages/detail-product.html.twig');
    }

    /*
    * Fonction permettant d'afficher le panier
    * @Route("/", name="app_cart")
    * @return Response
    */
    #[Route('/panier', name: 'app_cart')]
    public function panier(): Response
    {
        return $this->render('pages/cart.html.twig');
    }

    /*
    * Fonction permettant d'afficher le checkout
    * @Route("/", name="app_checkout")
    * @return Response
    */
    #[Route('/checkout', name: 'app_checkout')]
    public function checkout(): Response
    {
        return $this->render('pages/checkout.html.twig');
    }

    /*
    * Fonction permettant d'afficher la liste des produits
    * @Route("/", name="app_contact")
    * @return Response
    */
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}
