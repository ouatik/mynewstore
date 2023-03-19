<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyBookStoreController extends AbstractController
{
    #[Route('/mybookstore', name: 'app_my_book_store')]
    public function index(): Response
    {
        return $this->render('my_book_store/index.html.twig', [
            'controller_name' => 'MyBookStoreController',
        ]);
    }
}
