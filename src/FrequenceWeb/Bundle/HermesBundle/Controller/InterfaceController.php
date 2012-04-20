<?php

namespace FrequenceWeb\Bundle\HermesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class InterfaceController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FrequenceWebHermesBundle:Interface:index.html.twig', array('name' => $name));
    }
}
