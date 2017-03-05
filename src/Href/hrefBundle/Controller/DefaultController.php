<?php

namespace Href\hrefBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $users=$this->getDoctrine()->getRepository('hrefBundle:User');
        $users=$users->findAll();

        $structure=$this->getDoctrine()->getRepository('hrefBundle:Structure');
        $structures=$structure->findAll();


        return $this->render('hrefBundle:Default:index.html.twig',array('users'=>$users,'structures'=>$structures));
    }
}
