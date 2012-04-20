<?php

namespace FrequenceWeb\Bundle\HermesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FrequenceWebHermesBundle:Default:index.html.twig', array('name' => $name));
    }
}
