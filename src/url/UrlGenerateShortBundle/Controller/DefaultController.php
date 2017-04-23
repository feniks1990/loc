<?php

namespace url\UrlGenerateShortBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use url\UrlGenerateShortBundle\Document\shortUrlDB;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $sortUrl = new shortUrlDB();
        $erorUrl = "no";

        /**Получаем звсе из бд**/
        $repository = $this->get('doctrine_mongodb')->getRepository("urlUrlGenerateShortBundle:shortUrlDB");
        $resultDbShort = $repository->findAll();
        /**Получаем звсе из бд**/


        if (!count($resultDbShort)) {
            $resultDbShort = 'no';
        }


        $form = $this->createFormBuilder($sortUrl)
            ->add('nameUrl', TextType::class, array("label" => "Название"))
            ->add('fullUrl', TextType::class, array("label" => "Ввведите URL:"))
            ->add('saveUrl', SubmitType::class, array('label' => 'Отправить'))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $data = $request->request->get('form');
            if (!empty($data["fullUrl"])) {
                $validUrl = $this->is_url($data["fullUrl"]);
                if ($validUrl == true) {


                    if (checkdnsrr($data["fullUrl"])) {

                        $server = $request->getHost();
                        $sortUrl = $this->shortUrlGeneration();
                        $itogShortUrl = "http://{$server}{$sortUrl}";
                        $requestInfoAdd = $form->getData();
                        $requestInfoAdd->setShortUrl($itogShortUrl);
                        $this->addDoc($requestInfoAdd);

                        unset($request->request);

                    } else {
                        $erorUrl = "URL не существует";
                    }
                } else {
                    $erorUrl = "Это не URL";
                }
            } else {
                $erorUrl = "Укажите URL";
            }

        }

        $request->request->remove("form");
        return $this->render('urlUrlGenerateShortBundle:Default:index.html.twig',
            array(
                'form' => $form->createView(),
                'listUrl' => $resultDbShort,
                'error' => $erorUrl
            )
        );
    }


    public function is_url($in)
    {
        $w = "a-z0-9";
        $url_pattern = "#((?:f|ht)tps?://(?:www.)?(?:[$w\\-.]+/?\\.[a-z]{2,4})/?(?:[$w\\-./\\#]+)?(?:\\?[$w\\-&=;\\#]+)?)#xi";
        $a = preg_match($url_pattern, $in);
        return $a;
    }


    public function open_url($url)
    {
        $url_c = parse_url($url);

        if (!empty($url_c['host']) and checkdnsrr($url_c['host'])) {

            if ($otvet = @get_headers($url)) {
                return substr($otvet[0], 9, 3);
            }

        }
        return false;

    }


    public function addDoc($load)
    {
        $em = $this->get("doctrine_mongodb")->getManager();
        $em->persist($load);
        $em->flush();
    }


    function shortUrlGeneration($length = 8)
    {
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '/';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

}
