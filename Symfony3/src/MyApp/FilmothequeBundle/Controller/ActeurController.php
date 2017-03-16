<?php

namespace MyApp\FilmothequeBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\FilmothequeBundle\Entity\Acteur;
use MyApp\FilmothequeBundle\Form\ActeurForm;

class ActeurController implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function listerAction()
    {
        return $this->container->get('templating')->renderResponse(
'MyAppFilmothequeBundle:Acteur:lister.html.twig');
    }

    public function ajouterAction()
    {
      $acteur = new Acteur();
      $form = $this->container->get('form.factory')->create(new ActeurForm(), $acteur);

      return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Acteur:ajouter.html.twig',
      array('form' => $form->createView(),'message' => ''));

    }

    public function modifierAction($id)
    {
        return $this->container->get('templating')->renderResponse(
'MyAppFilmothequeBundle:Acteur:modifier.html.twig');
    }

    public function supprimerAction($id)
    {
        return $this->container->get('templating')->renderResponse(
'MyAppFilmothequeBundle:Acteur:supprimer.html.twig');
    }
}

?>
