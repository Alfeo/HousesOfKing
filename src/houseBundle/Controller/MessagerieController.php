<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use houseBundle\Entity\Messagerie;

class MessagerieController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $allmsg = [];
        $allMsgReceive = $em->getRepository('houseBundle:Messagerie')->findByDestinataire($user->getId());
        foreach ($allMsgReceive as $msg)
        {
            $thisAuteur = $em->getRepository('AppBundle:User')->findOneById($msg->getAuteur());
            $allmsg[] = array(
                'id' => $msg->getId(),
                'auteur' => $thisAuteur->getUsername(),
                'message' => $msg->getMessage(),
            );
        }

        return $this->render('houseBundle:messagerie:messagerie.html.twig', array(
            'receives' => $allmsg,
        ));
    }

    public function newMsgAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $destinataire = $request->request->get('destinataire');

        $thisUser = $em->getRepository('AppBundle:User')->findOneByUsername($destinataire);

        if ($thisUser != NULL)
        {
            $message = $request->request->get('message');

            $msg = new Messagerie();
            $msg->setAuteur($user->getId());
            $msg->setDestinataire($thisUser->getId());
            $msg->setMessage($message);

            $em->persist($msg);
            $em->flush();

            $request->getSession()
            ->getFlashBag()
            ->add('success', 'Message envoyé !')
        ;
        }
        else
        {
            $request->getSession()
            ->getFlashBag()
            ->add('error', 'Cet utilisateur n\'existe pas, veuillez réessayer !')
        ;
        }

        return $this->redirect($this->generateUrl('user_messagerie'));
    }

    public function deleteMsgAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $thisMsg = $request->request->get('deleteid');

        $deleting = $em->getRepository('houseBundle:Messagerie')->findOneById($thisMsg);
        
        $em->remove($deleting);
        $em->flush();

        $request->getSession()
        ->getFlashBag()
        ->add('warning', 'Message supprimé !')
    ;

        return $this->redirect($this->generateUrl('user_messagerie'));
    }
}
