<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Commande;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse;
use Ecommerce\EcommerceBundle\Form\UtilisateurAdresseType;
use Ecommerce\EcommerceBundle\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class PanierController extends Controller
{
    public function menupanierAction(Request $req)
    {
        $session=  $req->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('@EcommerceEcommerce/modules/lienpanier.html.twig',array('articles' => $articles));
    }

    public function panierAction(Request $req)
    {
        $session=  $req->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
      //  var_dump($panier);
     //   die();
        $produits=$this->getDoctrine()->getManager()->getRepository(Produits::class)->findByarrayid(array_keys($panier));
        $montantva=0;$listtva = array();$totalHT=0;

        foreach ($produits as $produit)
        {
            $listtva[]=$produit->getTva();
            $prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
            $totalHT += $prixHT;
            //  var_dump();
            // die();
        }
        return $this->render('@EcommerceEcommerce/panier/panier.html.twig',array('listtva'=>$listtva,'montanttva'=>$montantva,'produits' => $produits,
            'panier' => $panier,'prixHT'=>$prixHT,'prixTTC'=>$prixTTC,'totalHT'=>$totalHT));

    }
    public function livraisonAction(Request $req)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $utilisateur = $this->getUser();
       // $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser();
        $entity = new UtilisateurAdresse();
        $form = $this->createForm(UtilisateurAdresseType::class,$entity);

        if ($req->isMethod('POST') )
        {
            $form ->handleRequest($req);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUser($utilisateur);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('livraison'));
            }
        }
        return $this->render('@EcommerceEcommerce/panier/livraison.html.twig',array('form'=>$form->createView(),'utilisateur'=>$utilisateur));

    }
    public function validationAction(Request $req)
    {

        $session=$req->getSession();

        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');

        if ($req->get('livraison') != null )
        {
            $adresse['livraison'] = $req->get('livraison');

        } else {
            return $this->redirect($this->generateUrl('validation'));
        }

        $session->set('adresse',$adresse);
        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('EcommerceEcommerceBundle:Commandes:prepareCommande');
        $commande = $em->getRepository(Commande::class)->find($prepareCommande->getContent());
       // var_dump(  $commande);
         var_dump( $prepareCommande->getContent());
      die();
        return $this->render('@EcommerceEcommerce/panier/validation.html.twig', array('commande' => $commande));






    }
    public function ajouterproduitaupanierAction(Request $req,$id)
    {
        $session=  $req->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');


            if ($req->get('qte') != null)
            {
                $panier[$id] = $req->get('qte');
            }

            else
            {
                $panier[$id] = 1;
            }



        $session->set('panier',$panier);




        return $this->redirect($this->generateUrl('panier'));

    }
    public function supprimerproduitdepanierAction(Request $req,$id)
    {
        $session=  $req->getSession();
        $panier=$session->get('panier');
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);

        }
        return $this->redirect($this->generateUrl('panier'));
    }

    public function supprimeradresslivraisonAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository(UtilisateurAdresse::class)->find($id);

        if ($this->getUser() != $entity->getUser() || !$entity)
            return $this->redirect ($this->generateUrl ('livraison'));

        $em->remove($entity);
        $em->flush();

        return $this->redirect ($this->generateUrl ('livraison'));
    }





}
