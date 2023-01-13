<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CtfController extends AbstractController
{
	  /**
     * @Route("/", name="theo_portfolio")
     */
    public function index(): Response
    {
        return $this->render('ctf/index.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
    }



}
