<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accunt")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('auth/accunt.html.twig');
    }

    /**
     * @Route("/article", name="article")
     */
    public function articleAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/article.html.twig');
    }

    /**
     * @Route("/espace", name="espace")
     */
    public function espaceAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/espace.html.twig');
    }

    /**
     * @Route("/coucher", name="coucher")
     */
    public function couchereAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/coucher.html.twig');
    }

    /**
     * @Route("/cuisine", name="cuisine")
     */
    public function cuisineAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/cuisine.html.twig');
    }

    /**
     * @Route("/salon", name="salon")
     */
    public function salonAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/salon.html.twig');
    }

    /**
     * @Route("/salle", name="salle")
     */
    public function salleAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/salle.html.twig');
    }


    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction(Request $request)
    {
        // Create a new blank user and process the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('login');
    }

}
