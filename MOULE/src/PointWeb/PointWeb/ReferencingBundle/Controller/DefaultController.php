<?php

namespace PointWeb\ReferencingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PointWebReferencingBundle:Default:index.html.twig', array('name' => $name));
    }
}
