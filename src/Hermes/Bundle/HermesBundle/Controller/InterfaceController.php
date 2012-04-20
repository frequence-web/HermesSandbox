<?php

namespace Hermes\Bundle\HermesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class InterfaceController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('FrequenceWebHermesBundle:Interface:index.html.twig');
    }
}
