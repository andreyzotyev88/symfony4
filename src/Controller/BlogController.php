<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'title' => "Блог"
        ]);
    }

    public function show($slug)
    {
        return $this->render('blog/show.html.twig', [
            'slug' => $slug,
            'title' => $slug,
            'controller_name' => 'BlogController',
        ]);
    }
}
