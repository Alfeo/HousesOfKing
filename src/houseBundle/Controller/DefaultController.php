<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function characterAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	$statistiques = $em->getRepository('houseBundle:Datauser')->findOneById($user->getId());

        return $this->render('houseBundle:frontend:character.html.twig', array(
        	'joueur' => $statistiques,
        ));
    }
}
