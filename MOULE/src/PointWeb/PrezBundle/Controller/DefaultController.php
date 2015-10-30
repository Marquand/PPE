<?php

namespace PointWeb\PrezBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PointWebPrezBundle:Default:index.html.twig');
    }
}
