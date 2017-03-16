<?php

namespace SiteCommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteCommerceBundle:Default:index.html.twig');
    }
}
