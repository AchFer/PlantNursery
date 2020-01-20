<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategorieController extends Controller
{
    public function menueAction()
    {
        $em=$this->getDoctrine()->getManager();
        $rep=$em->getRepository(Categorie::class)->findAll();
        return $this->render('@EcommerceEcommerce/categorie/menue.html.twig',array('categories'=>$rep));

    }
}
