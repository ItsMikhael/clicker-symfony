<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
	 
    public function index()
    {
        return $this->render('/main/index.html.twig');
    }
	
	/**
     * @Route("/custom/{name?}", name="custom")
     */
	
	public function custom(Request $request) {
		
		$name = $request->get('name');
		
		return new Response('<html><body> inny pejcz ' . $name . ' </body></html> ');
		
	}
	
	public function login() {
			return $this->redner('/security/login.html.twig');
	}
}
