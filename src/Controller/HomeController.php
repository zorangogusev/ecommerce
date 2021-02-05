<?php

namespace App\Controller;

use App\Repository\ProductAttributesRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @Route("/view/{id?}", name="view")
     */
    public function view($id, ProductRepository $productRepository, ProductAttributesRepository $productAttributesRepository): Response
    {
        $product = $productRepository->find($id);
        $productAttributes = $productAttributesRepository->findBy(['product_id' => $id]);
        $youMyAlsoLikeProducts = $productRepository->findYouMyAlsoLikeProducts($product);

        return $this->render('home/view-product.html.twig', [
            'product' => $product,
            'productAttributes' => $productAttributes,
            'youMyAlsoLikeProducts' => $youMyAlsoLikeProducts
        ]);
    }
}
