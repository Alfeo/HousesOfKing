<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use houseBundle\Entity\House;
use houseBundle\Entity\Item;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    public function resetHouseAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $house1 = new House();
        $house1->setGold(0);
        $house1->setState(1);
        $house1->setLord(NULL);
        $house1->setName("Thorkel");
        $house1->setRefhouse(1);

        $house2 = new House();
        $house2->setGold(0);
        $house2->setState(1);
        $house2->setLord(NULL);
        $house2->setName("Exorine");
        $house2->setRefhouse(2);

        $house3 = new House();
        $house3->setGold(0);
        $house3->setState(1);
        $house3->setLord(NULL);
        $house3->setName("Rizzen");
        $house3->setRefhouse(3);

        $em->persist($house1);
        $em->persist($house2);
        $em->persist($house3);
        $em->flush();

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    public function resetItemAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $item1 = new Item();
        $item1->setName("Potion de vie");
        $item1->setType(1);
        $item1->setIditem(1);
        $item1->setMoreLife(100);
        $item1->setMoreDefense(0);
        $item1->setMoreStrenght(0);
        $item1->setNameImg("item1.jpg");
        $item1->setValue(5);

        $em->persist($item1);
        $em->flush();

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
