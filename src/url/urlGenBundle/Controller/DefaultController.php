<?php

namespace url\urlGenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use mongoDb\mongoBundle\Document\shortLink;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {

        $connectMongo = $this ->get("doctrine_mongodb");
        $connectMongo2 = $connectMongo ->getConnection();
        dump($connectMongo2->isConnected());



        return new Response();
       // return $this->render('urlurlGenBundle:Default:index.html.twig');
    }

    public function addUrl(){


    }



}


