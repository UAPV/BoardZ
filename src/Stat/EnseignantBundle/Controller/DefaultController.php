<?php

namespace Stat\EnseignantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StatEnseignantBundle:Default:index.html.twig', array('name' => $name));
    }
}
