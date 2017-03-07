<?php

namespace Href\hrefBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository('hrefBundle:User');
        $users = $users->findAll();

        $em = $this->getDoctrine()->getRepository('hrefBundle:Structure');
        $structures = $em->findAll();

        $gm = $em->findByLevel(1);
        $bud = $em->findByLevel(2);
        $ff = $em->findByLevel(3);
        $dm = $em->findByLevel(4);
        $rep = $em->findByLevel(5);

        $level4Count=count($dm);
        $level5Count=count($rep);


        return $this->render('hrefBundle:Default:index.html.twig', array(
            'users' => $users,
            'structures' => $structures,
            'gm' => $gm,
            'bud' => $bud,
            'ff' => $ff,
            'dm' => $dm,
            'rep' => $rep,
            'dmCount'=>$level4Count,
            'repCount'=>$level5Count
        ));
    }
}
