<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/router")
     * @return Response
     */
    public function index()
    {
        $number = rand(1,2000);
        return $this->render('base.html.twig',array("title"=>"Главная страница"));
    }

    /**
     * @return Response
     * @Route("/lucky/router")
     */
    public function number()
    {
        $number = rand(1,2000);
        return $this->render("/lucky/lucky.html.twig",array("number"=>$number));

    }
}