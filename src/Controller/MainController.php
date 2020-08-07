<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Gold;

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

        // fetching user data for gold
        $email = $this->getUser()->getUsername();
        // var_dump($email);
        $user = $this->getDoctrine()->getRepository(User::class)
            ->findOneBy(['email' => $email]);
        // var_dump($user);
        $userId = $user->getId();
        // var_dump($userId);

        // fetching user's gold
        $gold = $this->getDoctrine()->getRepository(Gold::class)
            ->findOneBy(['user_id' => $userId]);
        //var_dump($gold);


        return $this->render('/game/game.html.twig', ["gold" => $gold]);

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
}
