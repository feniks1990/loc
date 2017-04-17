<?php

namespace mongoDb\mongoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('mongoDbmongoBundle:Default:index.html.twig');
    }
}
