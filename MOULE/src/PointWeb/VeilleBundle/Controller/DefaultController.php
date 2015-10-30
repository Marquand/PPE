<?php

namespace PointWeb\VeilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $list = $this->getDoctrine()->getRepository('PointWebVeilleBundle:Article')->findAll();
        return $this->render('PointWebVeilleBundle:Default:index.html.twig', array('list' => $list));
    }
}
