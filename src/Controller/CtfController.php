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
            'controller_name' => 'CtfController',
        ]);
    }
      /**
     * @Route("/intro", name="intro")
     */
    public function intro(): Response
    {
        return $this->render('ctf/intro.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/challenges", name="challenges")
     */
    public function challenges(): Response
    {
        return $this->render('ctf/challenges.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/programmation", name="programmation")
     */
    public function programmation(): Response
    {
        return $this->render('ctf/programmation.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/stegano", name="stegano")
     */
    public function stegano(): Response
    {
        return $this->render('ctf/stegano.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/reseaux", name="reseaux")
     */
    public function reseaux(): Response
    {
        return $this->render('ctf/reseaux.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }





}
