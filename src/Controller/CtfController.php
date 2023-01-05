<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CtfController extends AbstractController
{
    /**
     * @Route("/ctf", name="ctf")
     */
    public function index(): Response
	
    {
        return $this->render('ctf/index.html.twig', [
            'controller_name' => 'CtfController',
        ]);
    }
	/**
	 * @Route("/", name="home")
	 */
	 public function home() 
	 {
		 return $this->render('ctf/home.html.twig',[
			'title' => "bienvenue",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page1", name="page1")
	 */
	 public function page1() 
	 {
		 return $this->render('ctf/page1.html.twig',[
			'title' => "page1",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page2", name="page2")
	 */
	 public function page2() 
	 {
		 return $this->render('ctf/page2.html.twig',[
			'title' => "page2",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page3", name="page3")
	 */
	 public function page3() 
	 {
		 return $this->render('ctf/page3.html.twig',[
			'title' => "page3",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page4", name="page4")
	 */
	 public function page4() 
	 {
		 return $this->render('ctf/page4.html.twig',[
			'title' => "page4",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page5", name="page5")
	 */
	 public function page5() 
	 {
		 return $this->render('ctf/page5.html.twig',[
			'title' => "page3",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page6", name="page6")
	 */
	 public function page6() 
	 {
		 return $this->render('ctf/page6.html.twig',[
			'title' => "page6",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page7", name="page7")
	 */
	 public function page7() 
	 {
		 return $this->render('ctf/page7.html.twig',[
			'title' => "page7",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page8", name="page8")
	 */
	 public function page8() 
	 {
		 return $this->render('ctf/page8.html.twig',[
			'title' => "page8",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page9", name="page9")
	 */
	 public function page9() 
	 {
		 return $this->render('ctf/page9.html.twig',[
			'title' => "page9",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page10", name="page10")
	 */
	 public function page10() 
	 {
		 return $this->render('ctf/page10.html.twig',[
			'title' => "page10",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page11", name="page11")
	 */
	 public function page11() 
	 {
		 return $this->render('ctf/page11.html.twig',[
			'title' => "page11",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/page12", name="page12")
	 */
	 public function page12() 
	 {
		 return $this->render('ctf/page12.html.twig',[
			'title' => "page12",
			'age' => 31
		]);
	}
	
	/**
	 * @Route("/ctf/page13", name="page13")
	 */
	public function page13() 
	{
		return $this->render('ctf/page13.html.twig',[
		   'title' => "page13",
		   'age' => 31
	   ]);
   }
	/**
	 * @Route("/ctf/cesar", name="cesar")
	 */
	 public function cesar() 
	 {
		 return $this->render('ctf/partie2/Cesar/login.php',[
			'title' => "cesar",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_cesar", name="auth_cesar")
	 */
	 public function cesar_auth() 
	 {
		$cesar_valide = "Bravo vous avez reussit : C3sar";
		$reponse = 0;
		if ($cesar_valide == $_POST['cesar']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Cesar/qhsdhs.html',[
			'title' => "cesar",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Cesar/login_error.php',[
			'title' => "cesar",
			'age' => 31
		]);
		}
	}	
	/**
	 * @Route("/ctf/dring", name="dring")
	 */
	 public function dring() 
	 {
		 return $this->render('ctf/partie2/Dring/login.php',[
			'title' => "Dring",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_dring", name="auth_dring")
	 */
	 public function dring_auth() 
	 {
		$phone_valide = "flagphone";
		$reponse = 0;
		if ($phone_valide == $_POST['phone']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Dring/jsifdjoqskf.html',[
			'title' => "dring",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Dring/login_error.php',[
			'title' => "dring",
			'age' => 31
		]);
		}
	}
	/**
	 * @Route("/ctf/photo", name="Photo")
	 */
	 public function Photo() 
	 {
		 return $this->render('ctf/partie2/Photo/login.php',[
			'title' => "Photo",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/auth_photo", name="aut_Photo")
	 */
	 public function auth_photo() 
	 {
		$photo_valide = "draw";
		$reponse = 0;
		if ($photo_valide == $_POST['photo']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Photo/klsdflop.html',[
			'title' => "photo",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Photo/login_error.php',[
			'title' => "Photo",
			'age' => 31
		]);
		}
	}
	/**
	 * @Route("/ctf/metadonnee", name="Stéganographie 2")
	 */
	 public function meta() 
	 {
		 return $this->render('ctf/partie2/Metadonnee/login.php',[
			'title' => "Metadonnee",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_meta", name="auth_meta")
	 */
	 public function meta_auth() 
	 {
		$meta_valide = "FlagM3ta";
		$reponse = 0;
		if ($meta_valide == $_POST['flag']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Metadonnee/ojrklsqdjkl.html',[
			'title' => "Metadonnee",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Metadonnee/login_error.php',[
			'title' => "Metadonnee",
			'age' => 31
		]);
		}
	}
	/**
	 * @Route("/ctf/son", name="Stéganographie 3")
	 */
	 public function son() 
	 {
		 return $this->render('ctf/partie2/Son/login.php',[
			'title' => "Son",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_son", name="auth_son")
	 */
	 public function son_auth() 
	 {
		$son_valide = "594782";
		$reponse = 0;
		if ($son_valide == $_POST['son']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Son/uzejnhrsd.html',[
			'title' => "Son",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Son/login_error.php',[
			'title' => "Son",
			'age' => 31
		]);
		}
	}
	/**
	 * @Route("/ctf/telnet", name="Telnet")
	 */
	 public function telnet() 
	 {
		 return $this->render('ctf/partie2/Telnet/login.php',[
			'title' => "Telnet",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_telnet", name="auth_telnet")
	 */
	 public function telnet_auth() 
	 {
		$telnet_valide = "user";
		$reponse = 0;
		if ($telnet_valide == $_POST['telnet']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Telnet/qshdolmkqsd.html',[
			'title' => "Telnet",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Telnet/login_error.php',[
			'title' => "Telnet",
			'age' => 31
		]);
		}
	}	
	/**
	 * @Route("/ctf/cookies", name="Cookies")
	 */
	 public function cookies() 
	 {
		 return $this->render('ctf/partie2/Cookies/login.php',[
			'title' => "Cookies",
			'age' => 31
		]);
	}
	/**
	 * @Route("/ctf/authentification_cookies", name="auth_photo")
	 */
	 public function authentification_cookies() 
	 {
		$admin = "admin";
		$reponse = 0;
		if ($admin == $_COOKIE['login']) {
		$reponse = 1;
		}
		else {
		$reponse = 0;
		}
	 	if ($reponse == 1){
		 return $this->render('ctf/partie2/Cookies/gufiughsdqkgujh.html',[
			'title' => "Cookies",
			'age' => 31
		]);
		}
		else {
		 return $this->render('ctf/partie2/Cookies/login_error.php',[
			'title' => "Cookies",
			'age' => 31
		]);
		}
	}
}
