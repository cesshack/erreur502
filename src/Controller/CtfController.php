<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CtfController extends AbstractController
{
	  /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('ctf/index.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
    }
      /**
     * @Route("/challenges", name="challenges")
     */
    public function challenges(): Response
    {
        return $this->render('ctf/challenges.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
    }



}
