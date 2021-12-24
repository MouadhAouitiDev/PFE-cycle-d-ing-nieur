<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MouadhController extends AbstractController
{
    #[Route('/mouadh', name: 'mouadh')]
    public function index(): Response
    {
       $Firstname = "Mouadh";
        return $this->render('mouadh/index.html.twig', [
            'Firstname' => $Firstname
        ]);
    }
}

