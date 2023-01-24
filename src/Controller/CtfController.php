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
        return $this->render('base/index.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
      /**
     * @Route("/intro", name="intro")
     */
    public function intro(): Response
    {
        return $this->render('base/intro.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/challenges", name="challenges")
     */
    public function challenges(): Response
    {
        return $this->render('base/challenges.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/programmation", name="programmation")
     */
    public function programmation(): Response
    {
        return $this->render('base/programmation.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/stegano", name="stegano")
     */
    public function stegano(): Response
    {
        return $this->render('base/stegano.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/reseaux", name="reseaux")
     */
    public function reseaux(): Response
    {
        return $this->render('base/reseaux.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    
     /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->render('base/index.php', [
            'controller_name' => 'CtfController',
        ]);
    }
   /**
     * @Route("/test2", name="test2")
     */
    public function test2(): Response
    {
        return $this->render('base/defis.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
     /**
     * @Route("/premierexostegano", name="premierexostegano")
     */
    public function premierexostegano(): Response
    {
        return $this->render('stegano/premier.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/décryptage", name="deuxiemexostegano")
     */
    public function deuxiemexostegano(): Response
    {
        return $this->render('stegano/deuxieme.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/police", name="troisiemexostegano")
     */
    public function troisiemexostegano(): Response
    {
        return $this->render('stegano/troisieme.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/réseau1", name="premierexoreseau")
     */
    public function premierexoreseau(): Response
    {
        return $this->render('reseaux/premier.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/réseau2", name="deuxiemeexoreseau")
     */
    public function deuxiemeexoreseau(): Response
    {
        return $this->render('reseaux/deuxieme.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }


       /**
     * @Route("/premierprog", name="premierprog")
     */
    public function premierprog(): Response
    {
        return $this->render('programmation/premier.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
        /**
     * @Route("/deuxiemeprog", name="deuxiemeprog")
     */
    public function deuxiemeprog(): Response
    {
        return $this->render('programmation/deuxieme.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }

        /**
     * @Route("/troisiemeprog", name="troisiemeprog")
     */
    public function troisiemeprog(): Response
    {
        return $this->render('programmation/troisieme.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
    /**
     * @Route("/quatriemestegano", name="quatriemestegano")
     */
    public function quatriemestegano(): Response
    {
        return $this->render('stegano/quatriemestegano.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }





}
