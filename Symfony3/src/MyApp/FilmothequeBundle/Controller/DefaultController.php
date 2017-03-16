<?php

namespace MyApp\FilmothequeBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Response;
use MyApp\FilmothequeBundle\Entity\Categorie;

class DefaultController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function indexAction()
    {
      $em = $this->container->get('doctrine')->getEntityManager();
        $categories = $em->getRepository('MyAppFilmothequeBundle:Categorie')->findAll();

        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:index.html.twig',array(
                 'categories' => $categories)
        );

    }
}
