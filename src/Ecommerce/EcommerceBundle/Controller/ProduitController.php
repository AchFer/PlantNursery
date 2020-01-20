<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProduitController extends Controller
{
    public function layoutAction()
    {
 return $this->render('@EcommerceEcommerce/layout.html.twig');

    }
    public function indexAction(Request $req )
    {
        $session=$req->getSession();
        if ($session->has('panier')) $panier=$session->get('panier');
        else $panier=false;
//var_dump($panier);
//die();
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository(Produits::class)->findBy(array('disponible'=>1));

        return $this->render('@EcommerceEcommerce/Default/index.html.twig',array('produits'=>$produits,'panier'=>$panier));
      //  $serializer= new Serializer([new ObjectNormalizer()]);
        //$formatted= $serializer->normalize($produits);
        //return new JsonResponse($formatted);
    }
    public function presentationAction(Request $req,$id)
    {
        $session=$req->getSession();
        if ($session->has('panier')) $panier=$session->get('panier');
        else $panier=false;

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(Produits::class)->find($id);
        if(!$produit) throw $this->createNotFoundException('produit inexistante ');
        return $this->render('@EcommerceEcommerce/produit/presentation.html.twig',array('produit'=>$produit,'panier'=>$panier));

    }
    public function findbycategorieAction($categorie)
    {

        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository(Produits::class)->findbycat($categorie);
      //  if(!$categoriee) throw $this->createNotFoundException('categoriee inexistante ');
        return $this->render('@EcommerceEcommerce/produit/produits.html.twig',array('produits'=>$produits));

    }
    public function recherchebuttonAction()
    {
        $form = $this->createForm(RechercheType::class, null);


        return $this->render('@EcommerceEcommerce/produit/recherche.html.twig',array('form'=>$form->createView()));

    }

    public function recherchetraitementAction(Request $request)
    {
        $form = $this->createForm(RechercheType::class, null);
           if($request->getMethod('post'))
           {
               $form->handleRequest($request);
              $chaine= $form->get('recherche')->getData();

           }
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository(Produits::class)->findbychaine($chaine);
      //  if(!$produits) throw $this->createNotFoundException("produit introuvable");
        return $this->render('@EcommerceEcommerce/produit/produits.html.twig',array('produits'=>$produits));


    }

}
