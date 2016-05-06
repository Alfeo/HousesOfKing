<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    public function characterAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	$statistiques = $em->getRepository('houseBundle:Datauser')->findOneByIduser($user->getId());

        $logs = $em->getRepository('houseBundle:Logs')->findByIduser($user->getId());

        return $this->render('houseBundle:frontend:character.html.twig', array(
        	'joueur' => $statistiques,
            'logs' => $logs,
        ));
    }

    public function mapAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	$statistiques = $em->getRepository('houseBundle:Datauser')->findOneByIduser($user->getId());

        return $this->render('houseBundle:frontend:map.html.twig', array(
        	'joueur' => $statistiques,
        ));
    }

    public function changeMapAction(Request $request, $map)
    {
    	$em = $this->getDoctrine()->getManager();

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	$statistiques = $em->getRepository('houseBundle:Datauser')->findOneByIduser($user->getId());
        $statistiques->setLocate($map);
    	
    	$em->persist($statistiques);
    	$em->flush();

        return $this->render('houseBundle:frontend:map.html.twig', array(
        	'joueur' => $statistiques
        ));
    }

    public function localeMapAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	$currentPos = $em->getRepository('houseBundle:Datauser')->findOneById($user->getId());
    	$allUserLocale = $em->getRepository('houseBundle:Datauser')->findByLocate($currentPos->getLocate());

        return $this->render('houseBundle:frontend:maplocale.html.twig', array(
        	'joueur' => $currentPos,
        	'others' => $allUserLocale
        ));
    }
}
