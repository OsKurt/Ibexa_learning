<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use eZ\Publish\Core\MVC\Symfony\View\ContentView;

class BlogPostController extends AbstractController
{
    public function index(ContentView $view)
    {

        $content = $view->getContent();

        return $this->render('blog_post/index.html.twig', [
            'controller_name' => 'BlogPostController',
            'content' => $content
        ]);
        //return new Response("hello");
    }
}
