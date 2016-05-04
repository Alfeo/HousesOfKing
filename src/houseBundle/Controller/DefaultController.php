<?php

namespace houseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function characterAction()
    {
        return $this->render('houseBundle:frontend:character.html.twig');
    }
}
