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
     * @Route("/game/", name="gameMain")
     */

	public function gameMain()
    {
        return $this->render('/game/game.html.twig');


    }
        /* /**
     * @Route("/custom/{name?}", name="custom")
     */
	// an example page
	/* public function custom(Request $request) {
		
		$name = $request->get('name');
		
		return new Response('<html><body> inny pejcz ' . $name . ' </body></html> ');
		
	}
	*/
	
	/* public function login() {
			return $this->render('/security/login.html.twig');
	}
	*/
}
