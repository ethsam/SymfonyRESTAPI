<?php

namespace EthSam\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EthSamBlogBundle:Default:index.html.twig');
    }
}
