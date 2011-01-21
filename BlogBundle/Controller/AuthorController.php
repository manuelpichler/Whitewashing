<?php

namespace Whitewashing\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthorController extends Controller
{
    public function listAction()
    {
        $authors = $this->container->get('whitewashing.blog.authorservice')->findAll();

        return $this->render('WhitewashingBlogBundle:Authort:list.twig.html', array(
            'authors' => $authors,
        ));
    }
}
